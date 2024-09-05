<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Tax;

class SeguroDeVida implements Tributavel
{
    private float $mensalidade = 570.0;

    public function calculaTributos(): float
    {
        return 42.0;
    }
}