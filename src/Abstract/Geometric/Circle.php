<?php

namespace OopExercises\Abstract\Geometric;

use OopExercises\Abstract\Geometric\Shape;

class Circle extends Shape
{
    public function __construct(public int $radius)
    {
    }

    public function calculateArea(): float
    {
        return pi() * ($this->radius ** 2);
    }

    public function calculatePerimeter(): float
    {
        return  2 * pi() * $this->radius;
    }
}