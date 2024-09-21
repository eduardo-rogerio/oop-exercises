<?php

namespace OopExercises\Traits\Serializable;

class Book
{
    use Serializable;

    public function __construct(public string $title, public string $isbin)
    {
    }
}