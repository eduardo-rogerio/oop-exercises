<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Notification;

class EmailNotifier implements Notifier
{

    public function sendNotification(string $message): string
    {
        return 'E-mail enviado para: example@emai.com, message: '. $message;
    }
}