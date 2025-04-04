<?php

namespace App\Console;

use App\Jobs\SendNewsletterJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Mail\SenderMails;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{

    protected $commands = [];

    /**
   
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $u = Recipient::factory()->create([
                'fullName' => 'Vsevolod',
                'email' => 'test@example.com',
            ]);
            Mail::to('vsev92@gmail.com')->queue(new SenderMails($u));
        })->everyMinute();


        $schedule->call(function () {
            \Log::info('Scheduled task is running every minute!');
        });
    }

    /**
     * 
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
