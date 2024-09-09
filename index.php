<?php

declare(strict_types=1);

use OopExercises\Abstract\Transport\Bike;
use OopExercises\Abstract\Transport\Car;
use OopExercises\Abstract\Transport\Pilot;

require 'vendor/autoload.php';

$car = new Car;
$bike = new Bike;
$pilot = new Pilot($car);

dump($pilot->run());
