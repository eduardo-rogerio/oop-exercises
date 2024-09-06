<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Listener;

class DatabaseEventListener implements EventListener
{

    public function handleEvent(string $event): string
    {
       return 'Database Event: ' . $event;
    }
}