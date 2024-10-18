<?php

namespace OopExercises\Enum\Payment;

enum PaymentMethod: string
{
    case CreditCard = 'cartão de crédito';
    case PayPal = 'PayPal';
    case BankTransfer = 'transferência bancaria';
}
