<?php

declare(strict_types=1);

use OopExercises\Traits\Payment\BankTransferPayment;
use OopExercises\Traits\Payment\CreditCardPayment;
use OopExercises\Traits\Payment\PayPalPayment;

require 'vendor/autoload.php';

$creditCard = new CreditCardPayment();
$paypal = new PayPalPayment();
$bankTransfer = new BankTransferPayment();

dump($paypal->makePayment(2500), $bankTransfer->refundPayment(300), $creditCard->makePayment(1988));
