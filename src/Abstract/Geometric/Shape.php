<?php

namespace OopExercises\Abstract\Geometric;

abstract class Shape
{
    abstract public function calculateArea(): float;

    abstract public function calculatePerimeter(): float;
}