<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Recipient;
use App\Mail\SenderMails;

class SendNewsletterJob implements ShouldQueue
{
    use Queueable;


    /**
     * Create a new job instance.
     */
    public function __construct() {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        /*
        $users = User::all(); // Или выберите нужных пользователей
        foreach ($users as $user) {
            Mail::to($user->email)->send(new MyNewsletter());
        }*/
        $u = Recipient::factory()->create([
            'fullName' => 'Vsevolod',
            'email' => 'test@example.com',
        ]);
        Mail::to('vsev92@gmail.com')->send(new SenderMails($u));
    }
}
