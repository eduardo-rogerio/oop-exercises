<?php

declare(strict_types=1);

use OopExercises\Abstract\Bike;
use OopExercises\Abstract\Car;
use OopExercises\Abstract\Pilot;

require 'vendor/autoload.php';

$car = new Car;
$bike = new Bike;
$pilot = new Pilot($car);

dump($pilot->run());
