<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class autoRouteCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:route 
                            {--controller=} 
                            {--module=}
                            {--type=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make route automatically 
                              according to controller and module
                              --type=crud each letter can be removed (r : for show and list)
                              ';

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
        $route_file = $this->getRouteFilePath();

        $contents = file_get_contents($route_file);

        $search_use = "/* Auto-Use */";
        $replace_use = "use App\Http\Controllers\\".
            $this->option('module')."\\".
            $this->option('controller').";".PHP_EOL.
            $search_use;
        $contents = str_replace($search_use, $replace_use, $contents);
            
        $search_route = '        /*
        * Auto-Routes
        */';
        $crud_option = $this->option('type');
        $controllerWordLength = strlen($this->option('controller'));
        $pureControllerName = strtolower(substr($this->option('controller'),0,$controllerWordLength-10));
        $replace_route = "";
        if(str_contains($crud_option,'r')){
            /**
             * index and show route
             */
            $replace_route .= "\t\tRoute::post('".$pureControllerName."', [".$this->option('controller')."::class, 'index']);".PHP_EOL;
            $replace_route .= "\t\tRoute::post('".$pureControllerName."/show', [".$this->option('controller')."::class, 'show']);".PHP_EOL;
        }
        if(str_contains($crud_option,'c')){
            /**
             * store route
             */
            $replace_route .= "\t\tRoute::post('".$pureControllerName."/insert', [".$this->option('controller')."::class, 'store']);".PHP_EOL;
        }
        if(str_contains($crud_option,'u')){
            /**
             * update route
             */
            $replace_route .= "\t\tRoute::post('".$pureControllerName."/update', [".$this->option('controller')."::class, 'update']);".PHP_EOL;
        }
        if(str_contains($crud_option,'d')){
            /**
             * delete route
             */
            $replace_route .= "\t\tRoute::post('".$pureControllerName."/delete', [".$this->option('controller')."::class, 'destroy']);".PHP_EOL;
        }
        $replace_route .= PHP_EOL . $search_route;
        $contents = str_replace($search_route, $replace_route, $contents);

        $bytes = file_put_contents($route_file,$contents);
        if($bytes > 0){
            $this->info("Route : api.php updated");
        }else{
            $this->error("Error : could not update api.php");
        }
        
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getRouteFilePath()
    {
        return base_path('routes/api') . '.php'; 
    }

}
