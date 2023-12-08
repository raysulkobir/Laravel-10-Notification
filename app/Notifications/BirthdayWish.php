<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class BirthdayWish extends Notification
{
    use Queueable;

    private $messages;
    /**
     * Create a new notification instance.
     */
    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // return (new MailMessage)
        //     ->from('your_email@example.com', 'Your Custom Name')
        //     ->line("Hey, Happy Birthday {$notifiable->name}!") // Use notifiable's name
        //     ->line($this->messages['wish'])
        //     ->action('View Birthday Wishes', url('/'))
        //     ->line('Thank you for being a valued member!');


        return (new MailMessage)
            ->from('your_email@example.com', 'Your Custom Name')
            ->view('emails.birthday', ['notifiable' => $notifiable, 'messages' => $this->messages])
            ->subject('Birthday Wishes');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
