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
        return (new MailMessage)->view('admin.email-template', [
            'nama_tim' => $this->data['nama_tim'],
            'pesan' => $this->data['pesan'],
            'pesan2' => $this->data['pesan2'],
        ])->subject($this->data['subject']);

        // if($this->data['status'] === '1'){
        //     return (new MailMessage)
        //             ->subject('Halo '.$this->data['nama_tim'])
        //             ->line('Terima kasih atas partisipasi Anda dalam perlombaan '.$this->data['nama_lomba'].'Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah dikonfirmasi. ')
        //             ->line('Langkah berikutnya adalah untuk mengisi biodata di link berikut : ')
        //             ->action('Team Biodata', url($this->data['link_lomba']))
        //             ->line('Terima kasih dan selamat menikmati perlombaan!');
        // }elseif($this->data['status'] === '01'){
        //     return (new MailMessage)
        //             ->subject('Halo '.$this->data['nama_tim'])
        //             ->line('Terima kasih atas partisipasi Anda dalam perlombaan '.$this->data['nama_lomba'].'Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah direview oleh tim. Akan tetapi terdapat kesalahan berkas atau data dalam pendaftaran anda')
        //             ->line('Silahkan menghubungi Contact Person')
        //             ->line('Terima kasih dan selamat menikmati perlombaan!');
        // }elseif($this->data['status'] === '2'){
        //     return (new MailMessage)
        //             ->subject('Halo '.$this->data['nama_tim'])
        //             ->line('Terima kasih atas partisipasi Anda dalam perlombaan '.$this->data['nama_lomba'].'Kami ingin memberitahu Anda bahwa biodata tim Anda telah dikonfirmasi. ')
        //             ->line('Langkah berikutnya adalah untuk terus memamantu timeline dari perlombaan')
        //             ->action('Dashboard Lomba', url($this->data['link_lomba']))
        //             ->line('Terima kasih dan selamat menikmati perlombaan!');
        // }elseif($this->data['status'] === '11'){
        //     return (new MailMessage)
        //             ->subject('Halo '.$this->data['nama_tim'])
        //             ->line('Terima kasih atas partisipasi Anda dalam perlombaan '.$this->data['nama_lomba'].'Kami ingin memberitahu Anda bahwa biodata tim Anda telah direview oleh tim. Akan tetapi terdapat kesalahan berkas atau data dalam biodata tim anda')
        //             ->line('Silahkan mengisi ulang biodata tim anda atau menghubungi Contact Person')
        //             ->action('Team Biodata', url($this->data['link_lomba']))
        //             ->line('Terima kasih dan selamat menikmati perlombaan!');
        // }

        
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
