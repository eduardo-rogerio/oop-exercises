<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Payment;

class Checkout
{
    public function __construct(public Payment $payment)
    {
    }

    public function finish(): string
    {
        return $this->payment->processPayment();
    }

    public function refound(): string
    {
        return $this->payment->refundPayment();
    }
}