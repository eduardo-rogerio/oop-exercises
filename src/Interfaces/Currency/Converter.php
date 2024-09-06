<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Currency;

class Converter
{
    public function __construct(public CurrencyConverter $currency)
    {
    }

    public function converter($value): float
    {
        return $this->currency->convert($value);
    }
}