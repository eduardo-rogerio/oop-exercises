<?php

declare(strict_types=1);

use OopExercises\Traits\Scorable\Basketball;
use OopExercises\Traits\Scorable\Soccer;

require 'vendor/autoload.php';

$soccer = new Soccer();
$bascketBall = new Basketball();

dump($soccer->increaseScore(1), $bascketBall->increaseScore(3));
