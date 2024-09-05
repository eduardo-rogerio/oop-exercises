<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Calculate;

class Rectangle implements Shape
{
    private float $base = 10.0;

    private float $height = 22.5;

    public function calculateArea(): float
    {
        return $this->base * $this->height;
    }
}