<?php

namespace OopExercises\Traits\Payment;

trait Payment
{
    public function makePayment(int $amount)
    {
        return $amount;
    }

    public function refundPayment(int $amount)
    {
        return $amount;
    }
}