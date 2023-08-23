<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoCandidato extends Notification
{
    use Queueable;

    private $vacante_id;
    private $vacante_nombre;
    private $usuario_id;
    /**
     * Create a new notification instance.
     */
    public function __construct($vacante_id, $vacante_nombre, $usuario_id)
    {
        $this->vacante_id = $vacante_id;
        $this->vacante_nombre = $vacante_nombre;
        $this->usuario_id = $usuario_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notificaciones');

        return (new MailMessage)
                    ->subject('Tu vacante: '.$this->vacante_nombre.' Tiene un nuevo candidato')
                    ->line('Has recibido un nuevo candidato en tu vacante.')
                    ->line('Vacante: '. $this->vacante_nombre)
                    ->action('Ver Notificaciones', $url)
                    ->line('Gracias por utilizar DevJobs');
    }

    /**
     * Almacena las notificaciones en la BD.
     */
    public function toDatabase(object $notifiable)
    {
        return [
            'vacante_id'     => $this->vacante_id,
            'vacante_nombre' => $this->vacante_nombre,
            'usuario_id'     => $this->usuario_id,
        ];
    }
}
