<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Calculate;

class AreaCalculator
{
    public function __construct(public Shape $figure)
    {
    }

    public function calculate(): float
    {
        return $this->figure->calculateArea();
    }
}