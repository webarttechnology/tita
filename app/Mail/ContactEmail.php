<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $senderName;
    public $senderEmail;
    public $phoneNumber;
    public $senderMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($senderName, $phoneNumber, $senderEmail, $senderMessage)
    {
        $this->senderName = $senderName;
        $this->phoneNumber = $phoneNumber;
        $this->senderEmail = $senderEmail;
        $this->senderMessage = $senderMessage;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You For Conecting with Us!!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contactemail',
        );
    }

    public function build()
    {
        return $this->view('mail.contactemail')
            ->subject('Subject of the Email');
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
