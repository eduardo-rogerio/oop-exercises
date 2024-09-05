<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Tax;

class ContaCorrente extends Conta implements Tributavel
{
    public function calculaTributos(): float
    {
        return $this->saldo * 0.1;
    }
}