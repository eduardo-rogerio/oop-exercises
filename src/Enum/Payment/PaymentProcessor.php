<?php

namespace OopExercises\Enum\Payment;

class PaymentProcessor
{
    public function processPayment(PaymentMethod $method): string
    {
        return 'Processando pagamento com ' . $method->value . PHP_EOL;
    }
}