<?php

namespace OopExercises\Traits\Serializable;

class Person
{
    use Serializable;

    public function __construct(public string $name, public string $email)
    {
    }
}