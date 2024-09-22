<?php

declare(strict_types=1);

use OopExercises\Traits\Shippable\AirFreight;
use OopExercises\Traits\Shippable\SeaFreight;

require 'vendor/autoload.php';

$sea = new SeaFreight();
$air = new AirFreight();
dump($sea->calculateShippingCost(tax:45, km: 1200), $air->trackShipment('LA206412146BN'));
