<?php

declare(strict_types=1);

use OopExercises\Enum\Days\DayOfWeek;

require 'vendor/autoload.php';

function getDaysOfWeek(DayOfWeek $day): string
{
    return match($day) {
        DayOfWeek::Monday => 'Segunda-feira',
        DayOfWeek::Tuesday => 'Terça-feira',
        DayOfWeek::Wednesday => 'Quarta-feira',
        DayOfWeek::Trursday => 'Quinta-feira',
        DayOfWeek::Friday => 'Sexta-feira',
        DayOfWeek::Saturday => 'Sábado',
        DayOfWeek::Sunday => 'Domingo',
    };
}

echo getDaysOfWeek(DayOfWeek::Wednesday) . PHP_EOL;
echo getDaysOfWeek(DayOfWeek::Tuesday) . PHP_EOL;
echo DayOfWeek::Sunday->isWeekend() ? 'É fim de semana' : 'Não é fim de semana';