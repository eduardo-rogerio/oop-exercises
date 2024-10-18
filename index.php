<?php

declare(strict_types=1);

use OopExercises\Enum\Error\ErrorHandler;
use OopExercises\Enum\Error\ErrorType;

require 'vendor/autoload.php';

$error = new ErrorHandler();

echo $error->handler(ErrorType::NotFound);
echo $error->handler(ErrorType::Unauthorized);
echo $error->handler(ErrorType::ServerError);