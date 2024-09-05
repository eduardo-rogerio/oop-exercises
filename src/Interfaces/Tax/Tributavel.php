<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Tax;

interface Tributavel
{
    public function calculaTributos(): float;
}