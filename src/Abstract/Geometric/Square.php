<?php

namespace OopExercises\Abstract\Geometric;

use OopExercises\Abstract\Geometric\Shape;

class Square extends Shape
{
    public function __construct(public int $side)
    {
    }

    public function calculateArea(): float
    {
        return $this->side ** 2;
    }

    public function calculatePerimeter(): float
    {
        return  $this->side * 4;
    }
}