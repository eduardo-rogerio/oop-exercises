<?php

namespace OopExercises\Traits\Authenticatable;

class RegularUser
{
    use Authenticatable;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}