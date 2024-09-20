<?php

namespace OopExercises\Traits\Notifiable;

class PushNotifier
{
    use Notifiable;

    private function notify($message)
    {
        return $message;
    }
}