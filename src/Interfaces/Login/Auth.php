<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Login;

final class Auth
{
    public static $user;

    public static function check(array $credentials): string
    {
        return self::$user->login($credentials);
    }

    public static function logout(): string
    {
        return self::$user->logout();
    }
}