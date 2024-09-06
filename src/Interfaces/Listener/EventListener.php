<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Listener;

interface EventListener
{
    public function handleEvent(string $event): string;
}
