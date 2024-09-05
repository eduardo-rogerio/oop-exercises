<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Calculate;

class RightTriangle implements Shape
{
    private float $base = 5.0;

    private float $hight = 8.0;

    public function calculateArea(): float
    {
        return ($this->base * $this->hight) / 2;
    }
}