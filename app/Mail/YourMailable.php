<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
class YourMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Mailable', // You can change the subject as needed
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Kent',  // Change this to your view name
        );
    }

    /**
     * Set the "reply-to" address for the email.
     */
    public function build()
    {
        return $this->view('ResetPassword')  // Specify the email view
                    ->replyTo('gplumber404@gmail.com')  // Set your "reply-to" address here
                    ->subject('Your Mailable');
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

    public function sendEmail()
    {
        $recipient = 'gplumber404@gmail.com';  // Replace with the actual recipient email

        // Send email using YourMailable class
        Mail::to($recipient)->send(new YourMailable());
        
        return 'Email sent!';
    }
}
