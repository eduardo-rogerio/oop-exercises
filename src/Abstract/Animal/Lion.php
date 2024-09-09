<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Animal;

class Lion extends Animal
{

    public function makeSound(): string
    {
        return 'rugido!!';
    }

    public function move(): string
    {
        return 'corre..';
    }
}