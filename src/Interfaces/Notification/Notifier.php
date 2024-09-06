<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Notification;

interface Notifier
{
    public function sendNotification(string $message): string;
}