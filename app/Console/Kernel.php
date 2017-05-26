<?php

namespace App\Console;

use App\Console\Commands\MediaCommand;
use App\Console\Commands\ProjectMakeCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * The console kernel wraps up Artisan
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ProjectMakeCommand::class,
        MediaCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule The scheduler
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('media')->cron('0 */2 * * *');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
