<?php

declare(strict_types=1);

use OopExercises\Abstract\Team\Designer;
use OopExercises\Abstract\Team\Developer;
use OopExercises\Abstract\Team\Manager;
use OopExercises\Abstract\Team\Staff;

require 'vendor/autoload.php';

$manger = new Manager();
$develop = new Developer();
$designer = new Designer();

$staff = new Staff();
$staff->addMember($manger);
$staff->addMember($develop);
$staff->addMember($designer);

dump($staff->calculateBonus());
