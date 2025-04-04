<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendNewsletterJob;

class SendScheduledEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-scheduled-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $schedule->job(new SendNewsletterJob)->at('2025-04-10 09:00');
    }
}
