<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'myproject:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command  can bee refresh my project ';
    // * * * * *   php \Users\TAJ\blog \ artisan  schedule run  >> /div/null 2>&1
   // C:\Users\TAJ\blog>

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
        Artisan::call('veiw:clear');
        Artisan::call('cache:clear');
        //Artisan::call('migrate:refresh');
        //Artisan::call('optimiz');
        //Artisan::call('db:seed');
        Artisan::call('config:clear');
    }
}
