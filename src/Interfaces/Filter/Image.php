<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Filter;

class Image
{
    public function filter(ImageFilter $filter): string
    {
        return $filter->applyFilter();
    }
}