<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Currency;

class EuroToPoundConverter implements CurrencyConverter
{
    private float $exchangeRate = 0.72;

    public function convert(float $value): float
    {
        return $value * $this->exchangeRate;
    }
}