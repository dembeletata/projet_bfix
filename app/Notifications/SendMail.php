<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendMail extends Notification
{
    use Queueable;
    public $pseudo;
    public $motDePasse;

    /**
     * Create a new notification instance.
     */
    public function __construct($pseudo, $motDePasse)
    {
        $this->pseudo = $pseudo;
        $this->motDePasse = $motDePasse;
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
        return (new MailMessage)
                    ->line('Votre demande a été acceptée. Voici vos identifiants :')
                    ->line("Pseudo : $this->pseudo")
                    ->line("Mot de passe : $this->motDePasse");
                    // ->action('Notification Action', url('/'))

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
