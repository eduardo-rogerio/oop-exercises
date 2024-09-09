<?php

declare(strict_types=1);

use OopExercises\Abstract\Employee\Contractor;
use OopExercises\Abstract\Employee\FullTimeEmployee;
use OopExercises\Abstract\Employee\PartTimeEmployee;

require 'vendor/autoload.php';

$employee = new FullTimeEmployee;
$trainee = new PartTimeEmployee;
$contractor = new Contractor;

dump($contractor->calculateEmployeeSalary($trainee));
dump($contractor->calculateEmployeeSalary($employee));
