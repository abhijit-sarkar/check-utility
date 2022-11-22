<?php

namespace Frost\Cloud\Console\Commands;

use ReflectionClass;
use Illuminate\Console\Command;

class Process extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:process {data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes process';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        print_r("Just checking");
        exit();
    }
}
