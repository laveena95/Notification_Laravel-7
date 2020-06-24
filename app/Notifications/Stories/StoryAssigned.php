<?php

namespace App\Notifications\Stories;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Story;

class StoryAssigned extends Notification implements ShouldQueue
{
    use Queueable;

    protected $story;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Story $story)
    {
        $this->story = $story;
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
        $title = $this->story->title;
        $id = $this->story->id;

        return (new MailMessage)
                    ->from('Appslanka@gmail.com', 'AppsLanka')
                    ->line('You have been assigned to a story.')
                    ->line("The title of the story is #{$id} {$title}")
                    ->action('View story', url('/'))
                    ->line('Thank you for using our application!');
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
