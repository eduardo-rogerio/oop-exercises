<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Animal;

class Bird extends Animal
{

    public function makeSound(): string
    {
        return 'Canta...';
    }

    public function move(): string
    {
        return 'Voa...';
    }
}