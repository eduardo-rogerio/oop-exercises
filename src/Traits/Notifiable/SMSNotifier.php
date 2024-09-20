<?php

namespace OopExercises\Traits\Notifiable;

class SMSNotifier
{
    use Notifiable;

    private function notify($message)
    {
        return $message;
    }
}