<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Notification;

class PushNotifier implements Notifier
{

    public function sendNotification(string $message): string
    {
        return 'Notificação enviada para o cliente id 23, message: ' . $message;
    }
}