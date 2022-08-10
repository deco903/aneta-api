<?php

namespace App\Notifications;
use NotificationChannels\PusherPushNotifications\PusherChannel;
use NotificationChannels\PusherPushNotifications\PusherMessage;
use Illuminate\Notifications\Notification;


class Pushnotif extends Notification
{
    public function via($notifiable)
    {
        
        return [PusherChannel::class];
    }

    public function toPushNotification($notifiable)
    {
        $message = "Your {$notifiable->service} account was approved!";

        return PusherMessage::create()
            ->iOS()
            ->badge(1)
            ->body($message)
            ->withAndroid(
                PusherMessage::create()
                    ->title($message)
                    ->icon('icon')
            )
            ->withWeb(
                PusherMessage::create()
                    ->title($message)
                    ->icon('icon')
            );
    }
    
}
