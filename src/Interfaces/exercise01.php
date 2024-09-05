<?php

declare(strict_types=1);

namespace OopExercises\Interfaces;

interface Tributavel
{
    public function calculaTributos(): float;
}

abstract class Conta
{
    protected float $saldo = 1000;

    public function sacar(float $valor): string
    {
        if($this->saldo <= 0){
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

class ContaCorrente extends Conta implements Tributavel
{
    public function calculaTributos(): float
    {
        return $this->saldo * 0.1;
    }
}

class SeguroDeVida implements Tributavel
{
    private float $mensalidade = 570.0;

    public function calculaTributos(): float
    {
       return 42.0;
    }
}

class GerenciadorDeImpostoDeRenda
{
    public function calcula(Tributavel $tributavel): float
    {
        return $tributavel->calculaTributos();

    }
}

$contaCorrente = new ContaCorrente();
$seguroDeVida = new SeguroDeVida();

$impostoDeRenda = new GerenciadorDeImpostoDeRenda();
var_dump($impostoDeRenda->calcula($seguroDeVida),$contaCorrente->sacar(140.0));