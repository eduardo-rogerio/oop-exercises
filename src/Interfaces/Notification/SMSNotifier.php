<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Notification;

class SMSNotifier implements Notifier
{

    public function sendNotification(string $message): string
    {
        return 'SMS enviado para (17) 98734-3532, message: ' . $message;
    }
}