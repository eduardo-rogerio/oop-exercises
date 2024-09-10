<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use OopExercises\Abstract\Geometric\Circle;
use OopExercises\Abstract\Geometric\Geometric;
use OopExercises\Abstract\Geometric\Rectangle;

$circle = new Circle(16);
$rectangle = new Rectangle(7, 25);

$geometric_1 = new Geometric($circle);
$geometric_2 = new Geometric($rectangle);

dump($geometric_1->metrics());
dump($geometric_2->metrics());
