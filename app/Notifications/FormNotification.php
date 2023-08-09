<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormNotification extends Notification
{
    use Queueable;
    protected $data; 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Halo '.$this->data['nama_tim'])
                    ->line('Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan '.$this->data['nama_lomba'])
                    ->line('Langkah berikutnya adalah untuk mengisi biodata di link berikut : ')
                    ->action('Notification Action', url($this->data['link_lomba']))
                    ->line('Terima kasih dan selamat menikmati perlombaan!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
