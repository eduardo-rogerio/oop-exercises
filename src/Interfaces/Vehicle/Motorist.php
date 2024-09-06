<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Vehicle;

class Motorist
{
    public function driver(Vehicle $vehicle): string
    {
        return $vehicle->drive();
    }
}