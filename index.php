<?php

declare(strict_types=1);

use OopExercises\Interfaces\Login\AdminUser;
use OopExercises\Interfaces\Login\Auth;
use OopExercises\Interfaces\Login\RegularUser;

require 'vendor/autoload.php';

$admin = new AdminUser();
$user = new RegularUser();

$credentials = [
    'email' => 'admin@exemplo.com',
    'password' => '4f9043f94v'
];

Auth::$user = $user;
dump(Auth::check($credentials));
dump(Auth::logout());
