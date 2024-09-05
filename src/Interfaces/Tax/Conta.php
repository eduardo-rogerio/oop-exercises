<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Tax;

abstract class Conta
{
    protected float $saldo = 1000;

    public function sacar(float $valor): string
    {
        if ($this->saldo <= 0) {
            return 'Saldo insuficiente';
        }

        $this->saldo -= $valor;

        return "você sacou {$valor}, seu saldo é {$this->saldo}";
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return "depositou {$valor}, seu saldo é {$this->saldo}";
    }

    protected function obterSaldo(): string
    {
        return "seu saldo é {$this->saldo}";
    }
}