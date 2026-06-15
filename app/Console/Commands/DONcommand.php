<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DONcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Dooney:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear:view-cache-config';

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
     * @return mixed
     */
    public function handle()
    {
    Artisan::call(' view:clear');
    Artisan::call(' cache:clear');
    Artisan::call(' config:clear');
 
    }
}
