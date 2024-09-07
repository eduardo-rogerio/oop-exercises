<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Login;

interface User
{
    public function login(array $credentials): string;

    public function logout(): string;

}