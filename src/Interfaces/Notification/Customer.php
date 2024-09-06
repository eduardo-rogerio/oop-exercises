<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Notification;

class Customer
{
    public function notify(Notifier $notifier, $message): string
    {
        return $notifier->sendNotification($message);
    }
}