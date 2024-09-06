<?php

use OopExercises\Interfaces\Vehicle\Car;
use OopExercises\Interfaces\Vehicle\Motorist;
use OopExercises\Interfaces\Vehicle\Truck;
require 'vendor/autoload.php';

$car = new Car();
$truck = new Truck();
$motorist = new Motorist();
dump($motorist->driver($car), $motorist->driver($truck));