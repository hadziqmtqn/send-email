<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SampleEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    public mixed $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(): SampleEmailMail
    {
        return $this->subject('Test Email')->view('emails.sample-email');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contoh Kirim OTP',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.sample-email',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
