<?php

declare(strict_types=1);

use OopExercises\Enum\Access\AccessLevel;
require 'vendor/autoload.php';

function canEdit(AccessLevel $level): string
{
    return match($level) {
        AccessLevel::Viewer => 'não',
        default => 'sim'
    };
}

echo 'O usuário tem permissão para editar: ' . canEdit(AccessLevel::Admin) . PHP_EOL;