<?php

namespace OopExercises\Traits\Authenticatable;

trait Authenticatable
{
    private string $username;

    private string $password;

    public function authenticate(string $username, string $password): string
    {
        if ($username === $this->username && $password === $this->password) {
            return 'Login successful';
        }
        return 'Login failed';

    }
}