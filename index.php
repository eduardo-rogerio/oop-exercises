<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use OopExercises\Interfaces\Repository\DatabaseRepository;
use OopExercises\Interfaces\Repository\FileRepository;
use OopExercises\Interfaces\Repository\ServiceRepository;

$file = new FileRepository('database.sqlite');
$database = new DatabaseRepository('user');

$data = [
    'name' => 'fulano',
    'email' => 'email@example.com',
    'phone' => '(17) 98363 4532',
];

$serviceRepository = new ServiceRepository($database);
dump($serviceRepository->save($data));
