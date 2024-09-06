<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Filter;

class BlurFilter implements ImageFilter
{

    public function applyFilter(): string
    {
        return 'Aplica efeito Blur';
    }
}