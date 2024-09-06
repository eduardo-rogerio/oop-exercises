<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Payment;

class PayPalPayment implements Payment
{

    public function processPayment(): string
    {
        return 'Processando pagamento no PayPal';
    }

    public function refundPayment(): string
    {
        return 'Estorna pagamento na sua conta PayPal';
    }
}