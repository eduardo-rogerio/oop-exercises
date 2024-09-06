<?php

use OopExercises\Interfaces\Currency\Converter;
use OopExercises\Interfaces\Currency\DollarToEuroConverter;
use OopExercises\Interfaces\Currency\EuroToPoundConverter;

require 'vendor/autoload.php';

$currency1 = new DollarToEuroConverter();
$currency2 = new EuroToPoundConverter();
$converter = new Converter($currency2);

dump($converter->converter(50.0));