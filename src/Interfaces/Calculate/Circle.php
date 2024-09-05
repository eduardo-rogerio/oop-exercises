<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Calculate;

class Circle implements Shape
{
    private float $raio = 45.0;

    public function calculateArea(): float
    {
        return 3.14 * ($this->raio ** 2);
    }
}