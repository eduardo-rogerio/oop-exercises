<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Vehicle;

class Car implements Vehicle
{

    public function drive(): string
    {
        return 'car running';
    }
}