<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Pluralizer;
use Illuminate\Filesystem\Filesystem;

class autoServiceCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:service 
                            {--model=} 
                            {--module=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make service automatically 
                              and imports model';

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
        return __DIR__ . '/../../../stubs/autoService.stub';
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
        return [
            'MODULE_NAME'       => $this->option('module'),
            'MODEL_NAME'        => $this->getSingularClassName($this->option('model')),
            'SERVICE_NAME'       => $this->getSingularClassName($this->option('model')).'Service',
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
        return base_path('app/Services') . '/' . 
            $this->option('module') . '/' .
            $this->getSingularClassName($this->option('model')) . '/' .
            $this->getSingularClassName($this->option('model')) . 'Service.php';
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

}
