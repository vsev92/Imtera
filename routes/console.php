<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



Schedule::call(function () {
    $u = Recipient::factory()->create([
        'fullName' => 'Vsevolod',
        'email' => 'test@example.com',
    ]);
    Mail::to('vsev92@gmail.com')->queue(new SenderMails($u));
})->everyMinute();
