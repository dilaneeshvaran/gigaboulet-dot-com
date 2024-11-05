<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
	use Queueable, SerializesModels;
	/**
	* Create a new message  instance.
	*/
	public $name, $email, $message,$mailData;
	
	public function __construct($name, $email, $message,$mailData)
	{
		$this->name = $name;
		$this->email = $email;
		$this->message = $message;
        $this->mailData = $mailData;
	}

	/**
	* Get the message  envelope.
	*/
	public function envelope(): Envelope
	{
		return new Envelope(subject: $this->name);
	}

	/**
	* Get the message  content definition.
	*/
	public function content(): Content
	{
		return new Content(markdown: 'mail/email_to_admin');
	}

	/**
	* Get the attachments for the message .
	*
	* @return array<int, \Illuminate\Mail\Mailables\Attachment>
	*/
	public function attachments(): array
	{
		return [];
	}
}