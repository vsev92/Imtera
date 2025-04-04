<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Recipient;

class SenderMails extends Mailable
{
    use Queueable, SerializesModels;

    private $recipient;

    public function __construct(Recipient $recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Congratulations with birthday',
        );
    }

    /**
     * Get the message content definition.
     */


    public function content(): Content
    {
        return new Content(
            view: 'mails.congratulation',
            with: ['name' => $this->recipient->fullName]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
