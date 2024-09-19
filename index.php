<?php

declare(strict_types=1);

use OopExercises\Traits\FileProcessor;

require 'vendor/autoload.php';

$file = new FileProcessor;

dump($file->process('file.txt'));
