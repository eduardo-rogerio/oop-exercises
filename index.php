<?php

declare(strict_types=1);

use OopExercises\Traits\Scorable\Basketball;
use OopExercises\Traits\Scorable\Soccer;

require 'vendor/autoload.php';

$soccer = new Soccer();
$bascketBall = new Basketball();

dump("marcou um gol placar: {$soccer->increaseScore(1)} a 0", "cesta de 3 pontos placar: {$bascketBall->increaseScore(3)} a 34");
