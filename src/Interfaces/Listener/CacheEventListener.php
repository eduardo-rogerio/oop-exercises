<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Listener;

class CacheEventListener implements EventListener
{

    public function handleEvent(string $event): string
    {
        return 'Cache Event: ' . $event;
    }
}