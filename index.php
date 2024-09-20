<?php

declare(strict_types=1);

use OopExercises\Traits\Persistable\Order;
use OopExercises\Traits\Persistable\User;

require 'vendor/autoload.php';

$use = new User;
$order = new Order;
dump($use->save(), $order->save());
