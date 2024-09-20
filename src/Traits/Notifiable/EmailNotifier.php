<?php

namespace OopExercises\Traits\Notifiable;

class EmailNotifier
{
    use Notifiable;

    private function notify($message)
    {
        return $message;
    }
}