<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Pluralizer;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class autoModelCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:model 
                            {--model=} 
                            {--module=}
                            {--migration=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make model automatically 
                              according to migration and predefined format';

    /**
     * Filesystem instance
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = $this->getSourceFilePath();

        $this->makeDirectory(dirname($path));

        $contents = $this->getSourceFile();

        $sub_pathes = explode('/', $path);
        $sub_length = count($sub_pathes);
        $to_print_path = $sub_pathes[$sub_length - 3] . '/' .
            $sub_pathes[$sub_length - 2] . '/' .
            $sub_pathes[$sub_length - 1];

        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$to_print_path} created");
        } else {
            $this->info("File : {$to_print_path} already exits");
        }
    }

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath()
    {
        return __DIR__ . '/../../../stubs/autoModel.stub';
    }

    /**
     **
     * Map the stub variables present in stub to its value
     *
     * @return array
     *
     */
    public function getStubVariables()
    {
        $migration_fields = $this->readMigration($this->option('migration'));
        
        [$columns, $table_name, $insert_and_update] = $this->createCombinationalVariables($migration_fields);

        return [
            'MODULE_NAME'       => $this->option('module'),
            'MODEL_NAME'        => $this->getSingularClassName($this->option('model')),
            'COLUMNS'           => $columns,
            'TABLE_NAME'        => $table_name,
            'INSERT_AND_UPDATE' => $insert_and_update
        ];
    }

    /**
     * Get the stub path and the stub variables
     *
     * @return bool|mixed|string
     *
     */
    public function getSourceFile()
    {
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables());
    }


    /**
     * Replace the stub variables(key) with the desire value
     *
     * @param $stub
     * @param array $stubVariables
     * @return bool|mixed|string
     */
    public function getStubContents($stub, $stubVariables = [])
    {
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace) {
            $contents = str_replace('$' . $search . '$', $replace, $contents);
        }

        return $contents;
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath()
    {
        return base_path('app/Models') . '/' . 
            $this->option('module') . '/' .
            $this->getSingularClassName($this->option('model')) . '.php';
    }

    /**
     * Return the Singular Capitalize Name
     * @param $name
     * @return string
     */
    public function getSingularClassName($name)
    {
        return ucwords(Pluralizer::singular($name));
    }

    /**
     * Build the directory for the class if necessary.
     *
     * @param  string  $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }


    /**
     * Read migration file and create model
     * Model should have columns and insert and update functions
     * 
     *  @param string $migration_path
     *  @return array 
     */
    protected function readMigration($migration_path)
    {
        try{
            $migration_content = $this->files->get(base_path($migration_path));
        }catch(FileNotFoundException $exc){
            $this->error('Migration file not found');
        }

        $fields_strings = explode('$table->',$migration_content);

        $final_extracted_fields = [];
        foreach($fields_strings as $field){
            if(
                str_contains($field,'softDeletes') ||
                str_contains($field,'timestamps') ||
                str_contains($field,'created_by') ||
                str_contains($field,'sort') ||
                str_contains($field,'foreign') ||
                str_contains($field,'primary')
            ){
                continue;
            }

            $parts = explode('->',$field);
            $first_qutation = strpos($parts[0],"'");
            if($first_qutation !== false){
                $second_qutation = strpos($parts[0],"'",$first_qutation+1);
            }else{
                $this->error('Migration format is invalid near  "...'.$field.'..."');
                exit(0);
            }

            $extracted_field = substr($parts[0],$first_qutation+1,$second_qutation-$first_qutation-1);
            $final_extracted_fields[] = $extracted_field;
        }

        return $final_extracted_fields;
    }


    /**
     * Create variables needed in stub
     * From migration content 
     * 
     */
    protected function createCombinationalVariables($migration_fields)
    {
        $table_name = $migration_fields[0];
        array_shift($migration_fields);

        $columns = "";
        $insert_and_update = "";
        foreach($migration_fields as $field){
            $columns .= "\t\t'$field' => '$table_name.$field',".PHP_EOL;
            $insert_and_update .= "\t\t".'if(isset($request->'.$field.'))$model->'.$field.' = $request->'.$field.';'.PHP_EOL;
        }

        $columns = substr($columns, 2,strlen($columns)-3);
        $insert_and_update = substr($insert_and_update, 2,strlen($insert_and_update)-3);

        return [
            $columns, 
            $table_name,
            $insert_and_update
        ];
    }
}
