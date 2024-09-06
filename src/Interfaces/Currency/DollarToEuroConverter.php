<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Currency;

class DollarToEuroConverter implements CurrencyConverter
{
    private float $exchangeRate = 0.85;

    public function convert(float $value): float
    {
        return $value * $this->exchangeRate;
    }
}