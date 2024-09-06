<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Filter;

interface ImageFilter
{
    public function applyFilter(): string;
}