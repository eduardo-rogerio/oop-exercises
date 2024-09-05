<?php

declare(strict_types=1);

interface Shape
{
    public function calculateArea(): float;
}

class Circle implements Shape
{
    private float $raio = 45.0;

    public function calculateArea(): float
    {
        return 3.14 * ($this->raio ** 2);
    }
}

class Rectangle implements Shape
{
    private float $base = 10.0;

    private  float $height = 22.5;

    public function calculateArea(): float
    {
        return $this->base * $this->height;
    }
}

class RightTriangle implements Shape
{
    private float $base = 5.0;

    private float $hight = 8.0;

    public function calculateArea(): float
    {
       return ($this->base * $this->hight) / 2;
    }
}

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

$circle = new Circle();
$rectangle = new Rectangle();
$areaCalculator = new AreaCalculator($rectangle);

var_dump($areaCalculator->calculate());