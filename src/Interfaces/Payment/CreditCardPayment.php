<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Payment;

class CreditCardPayment implements Payment
{

    public function processPayment(): string
    {
        return 'Processando pagamento cartão de credito';
    }

    public function refundPayment(): string
    {
        return 'Estorna pagamento da fatura do cartão';
    }
}