<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Animal;

class Zoo
{
    public function __construct(public Animal $animal)
    {
    }

    public function sound(): string
    {
        return $this->animal->makeSound();
    }

    public function move(): string
    {
        return $this->animal->move();
    }
}