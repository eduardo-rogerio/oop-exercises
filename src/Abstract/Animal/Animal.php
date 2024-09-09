<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Animal;

abstract class Animal
{
    abstract public function makeSound(): string;

    abstract public function move(): string;
}