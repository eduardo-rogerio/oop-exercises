<?php

namespace OopExercises\Abstract\Geometric;

use OopExercises\Abstract\Geometric\Shape;

class Rectangle extends Shape
{
    public function __construct(public int $base, public int $height)
    {
    }

    public function calculateArea(): float
    {
        return (float)($this->base * $this->height);
    }

    public function calculatePerimeter(): float
    {
        return 2 * ($this->base + $this->height);
    }
}