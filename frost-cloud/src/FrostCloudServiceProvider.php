<?php

namespace Frost\Cloud;

use Frost\Cloud\Console\Commands\Process;
use Illuminate\Support\ServiceProvider;

class FrostCloudServiceProvider extends ServiceProvider{
    
    public function boot(){

        if($this->app->runningInConsole()){
            $this->commands([
                Process::class
            ]);
        }
    }
}