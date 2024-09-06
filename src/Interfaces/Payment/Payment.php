<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Payment;

interface Payment
{
    public function processPayment(): string;

    public function refundPayment(): string;
}