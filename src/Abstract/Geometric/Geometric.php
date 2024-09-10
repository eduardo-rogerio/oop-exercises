<?php

namespace OopExercises\Abstract\Geometric;

class Geometric
{
    public function __construct(public Shape $shape)
    {
    }

    public function metrics(): array
    {
        return [
            'area' => $this->shape->calculateArea(),
            'perimeter' => $this->shape->calculatePerimeter()
        ];
    }
}