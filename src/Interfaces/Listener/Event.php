<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Listener;

class Event
{
    public function __construct(public EventListener $listener)
    {
    }

    public function dispath($event): string
    {
        return $this->listener->handleEvent($event);
    }
}