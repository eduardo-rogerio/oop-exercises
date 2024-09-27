<?php

declare(strict_types=1);

use OopExercises\Enum\Days\DayOfWeek;

require 'vendor/autoload.php';

echo DayOfWeek::Sunday->isWeekend() ? 'É fim de semana' . PHP_EOL : 'Não é fim de semana' . PHP_EOL;
echo DayOfWeek::Monday->businessDay() ? 'É dia útil' . PHP_EOL : 'Não é dia útil' . PHP_EOL;