<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Tax;

class GerenciadorDeImpostoDeRenda
{
    public function calcula(Tributavel $tributavel): float
    {
        return $tributavel->calculaTributos();

    }
}