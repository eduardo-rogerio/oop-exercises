<?php

namespace OopExercises\Traits\Notifiable;

trait Notifiable
{
    public function sendNotification(string $message)
    {
        return $this->notify($message);
    }
}