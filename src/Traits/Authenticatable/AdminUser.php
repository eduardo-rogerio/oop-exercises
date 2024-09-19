<?php

namespace OopExercises\Traits\Authenticatable;

class AdminUser
{
    use Authenticatable;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}