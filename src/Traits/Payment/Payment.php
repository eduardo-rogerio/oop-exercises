<?php

declare(strict_types=1);

namespace OopExercises\Traits\Payment;

trait Payment
{
    public function makePayment(int $amount)
    {
        return 'Pagamento realizado: R$' . number_format($amount);
    }

    public function refundPayment(int $amount)
    {
        return 'Reenbolso realizado' . number_format($amount);
    }
}