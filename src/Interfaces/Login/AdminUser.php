<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Login;

class AdminUser implements User
{
    private array $credentials;

    public function login(array $credentials): string
    {
        $this->credentials = $credentials;
        return "Login efetuado com sucesso usuário {$this->credentials['email']}";
    }

    public function logout(): string
    {
        return "Usuário {$this->credentials['email']} saiu  do sistema";
    }
}