<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TransportBookingReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    
    public function __construct($details)
    {
        $this->details = $details;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'TRANSPORT BOOKING HAS BEEN RECEIVED AND IN PROCESS',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.transport_booking',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}