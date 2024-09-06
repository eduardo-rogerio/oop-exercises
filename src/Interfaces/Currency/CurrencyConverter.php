<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Currency;

interface CurrencyConverter
{
    public function convert(float $value):float;
}