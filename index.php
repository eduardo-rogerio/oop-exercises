<?php

declare(strict_types=1);

use OopExercises\Abstract\Play\Chess;
use OopExercises\Abstract\Play\Soccer;
use OopExercises\Abstract\Play\VideoGame;

require 'vendor/autoload.php';

$chess = new Chess();
$soccer = new Soccer();
$videoGame = new VideoGame();
dump($soccer->startGame(), $chess->startGame(), $videoGame->startGame());


