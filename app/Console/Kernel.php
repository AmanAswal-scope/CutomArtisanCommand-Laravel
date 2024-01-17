<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
$schedule->command('test:cron')->cron('* * * * *');
    }

    protected $commands = [
        // Commands\GreetCommand::class,
        // Commands\SecondCommand::class,
        // Commands\GetDbName::class,
        Commands\testcron::class,
    ];

 
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
      
        
    }
}
