<?php

namespace OopExercises\Abstract\Bank;

use OopExercises\Abstract\Bank\BankAccount;

class SavingsAccount extends BankAccount
{
    public float $total;

    public function __construct(public string $agency, public string $accountNumber)
    {
        $this->total = random_int(2000, 50000);
    }

    public function deposit(float $amount): void
    {
        $this->total += $amount;
    }

    public function withdraw(float $value): float|string
    {
        if($value > $this->total){
            return 'Saldo insuficiente...';
        }

        $this->total -= $value;
        return $value;
    }

    public function getBalance(): float
    {
        return $this->total;
    }
}