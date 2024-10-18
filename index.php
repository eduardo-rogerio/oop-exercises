<?php

declare(strict_types=1);

use OopExercises\Enum\Payment\PaymentMethod;
use OopExercises\Enum\Payment\PaymentProcessor;

require 'vendor/autoload.php';

$payment = new PaymentProcessor();

echo $payment->processPayment(PaymentMethod::CreditCard);
echo $payment->processPayment(PaymentMethod::PayPal);
echo $payment->processPayment(PaymentMethod::BankTransfer);