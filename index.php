<?php

declare(strict_types=1);

use OopExercises\Traits\Counter\Cart;
use OopExercises\Traits\Counter\Checkout;

require 'vendor/autoload.php';

$cart1 = new Cart;
$cart2 = new Cart;
$checkout1 = new Checkout;
echo "Cart instances: " . Cart::getInstanceCount() . PHP_EOL;
echo "Checkout instances: " . Checkout::getInstanceCount() . PHP_EOL;