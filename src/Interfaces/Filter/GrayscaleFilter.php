<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Filter;

class GrayscaleFilter implements ImageFilter
{

    public function applyFilter(): string
    {
        return 'Aplica efeito escala de cinza';
    }
}