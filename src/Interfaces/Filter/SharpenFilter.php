<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Filter;

class SharpenFilter implements ImageFilter
{

    public function applyFilter(): string
    {
        return 'Aplica efeito Sharpen';
    }
}