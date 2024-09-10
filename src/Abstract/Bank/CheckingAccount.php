<?php

namespace OopExercises\Abstract\Bank;

use OopExercises\Abstract\Bank\BankAccount;

class CheckingAccount extends BankAccount
{
    public function __construct(public float $total, public string $agency, public string $accountNumber)
    {
    }

    public function deposit(float $amount): void
    {
        $this->total += $amount;
    }

    public function withdraw(float $value): float|string
    {
        if($value > $this->total){
            return "Saldo insuficiente: Você esta tentando sacar {$value} e seu saldo é {$this->total}";
        }
        $this->total -= $value;

        return $value;
    }

    public function getBalance(): float
    {
        return $this->total;
    }
}