<?php

declare(strict_types=1);

use OopExercises\Abstract\Freight\AirTransport;
use OopExercises\Abstract\Freight\ShipTransport;
use OopExercises\Abstract\Freight\TruckTransport;

require 'vendor/autoload.php';

$truck = new TruckTransport;
$ship = new ShipTransport;
$airplane = new AirTransport;
dump($airplane->loadCargo(), $airplane->unloadCargo(), $airplane->calculateCost());
