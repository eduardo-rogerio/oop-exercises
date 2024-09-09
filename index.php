<?php

declare(strict_types=1);

use OopExercises\Abstract\Animal\Bird;
use OopExercises\Abstract\Animal\Zoo;

require 'vendor/autoload.php';

$animal = new Bird;
$zoo = new Zoo($animal);
dump($zoo->sound());
