<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Vehicle;

class Truck implements Vehicle
{

    public function drive(): string
    {
        return 'truck moving';
    }
}