<?php

namespace App\Console;

use TestCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [

        Commands\TestCommand::class, 
        //namespace App\Console\Commands\TestCommand;

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
         //          ->hourly();

        //$schedule->exec('php artisan myproject:refresh')->cron('5 * * * *');
        //$schedule->exec('php artisan myproject:refresh')->daily();
        //$schedule->exec('php artisan myproject:refresh')->withoutOverLapping();
        //$schedule->exec('php artisan myproject:refresh')->evenInMaintenanceMode();
        //$schedule->exec('php artisan myproject:refresh')->evenInMaintenanceMode();
        //$schedule->exec('php artisan myproject:refresh')->daily();
        //$schedule->exec('php artisan Dooney:command')->daily();
    
    } 




    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
