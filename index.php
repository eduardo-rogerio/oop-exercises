<?php

use OopExercises\Interfaces\Payment\Checkout;
use OopExercises\Interfaces\Payment\CreditCardPayment;
use OopExercises\Interfaces\Payment\PayPalPayment;

require 'vendor/autoload.php';

$creditCard = new CreditCardPayment();
$paypal = new PayPalPayment();
$checkout1 = new Checkout($creditCard);
$checkout2 = new Checkout($paypal);

dump($checkout1->finish());
dump($checkout2->finish());