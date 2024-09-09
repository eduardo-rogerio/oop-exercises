<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Animal;

class Elephant extends Animal
{

    public function makeSound(): string
    {
        return 'bramidos';
    }

    public function move(): string
    {
        return 'corre...';
    }
}