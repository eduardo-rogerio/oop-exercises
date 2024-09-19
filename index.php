<?php

declare(strict_types=1);

use OopExercises\Traits\Authenticatable\AdminUser;
use OopExercises\Traits\Authenticatable\RegularUser;

require 'vendor/autoload.php';

$admin = new AdminUser('admin', '32186568');
$user = new RegularUser('user', '12345678');

dump($admin->authenticate('admin', '32186568'));
dump($user->authenticate('user', '123456785'));
