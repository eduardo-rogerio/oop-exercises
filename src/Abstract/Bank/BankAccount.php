<?php

namespace OopExercises\Abstract\Bank;

abstract class BankAccount
{
    abstract public function deposit(float $amount): void;

    abstract public function withdraw(float $value): float|string;

    abstract public function getBalance(): float;
}