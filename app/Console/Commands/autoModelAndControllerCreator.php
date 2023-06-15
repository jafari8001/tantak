<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Pluralizer;
use Illuminate\Filesystem\Filesystem;


class autoModelAndControllerCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:crud
                            {--route=}
                            {--module=}
                            {--migration=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically create model and controller 
                                according to predefined formats';

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
     *
     * @return int
     */
    public function handle()
    {
        $table_name = $this->getTableNameFromMigration($this->option('migration'));
        $model_name = $this->getModelNameFromTableName($table_name);

        $this->call('auto:model', [
            '--module' => $this->option('module'),
            '--model'  => $model_name,
            '--migration'  => $this->option('migration')
        ]);
        $this->call('auto:controller', [
            '--module' => $this->option('module'),
            '--model'  => $model_name,
            '--table'  => $table_name,
            '--migration'  => $this->option('migration')
        ]);
        $this->call('auto:service', [
            '--module' => $this->option('module'),
            '--model'  => $model_name,
        ]);
        $this->call('auto:route', [
            '--module' => $this->option('module'),
            '--controller'  => $this->getSingularClassName($model_name) . 'Controller',
            '--type'  => $this->option('route')
        ]);
        $this->call('auto:test', [
            '--module' => $this->option('module'),
            '--model'  => $model_name,
            '--migration'  => $this->option('migration')
        ]);
        return 0;
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
     * Read migration file and extracts table name
     * 
     *  @param string $migration_path
     *  @return string 
     */
    protected function getTableNameFromMigration($migration_path)
    {
        try{
            $migration_content = $this->files->get(base_path($migration_path));
        }catch(FileNotFoundException $exc){
            $this->error('Migration <'.$migration_path.'> file not found');
            exit(0);
        }

        $fields_strings = explode('$table->',$migration_content);

        $final_extracted_fields = [];
        foreach($fields_strings as $field){
            if(
                str_contains($field,'softDeletes') ||
                str_contains($field,'timestamps') ||
                str_contains($field,'created_by') ||
                str_contains($field,'sort') ||
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

        return $final_extracted_fields[0];
    }


    protected function getModelNameFromTableName($table_name)
    {
        return Pluralizer::singular(str_replace("_","",ucwords($table_name,"_")));

    }

}
