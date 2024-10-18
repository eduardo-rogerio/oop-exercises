<?php

namespace OopExercises\Enum\Error;

class ErrorHandler
{
    public function handler(ErrorType $erro): string
    {
        return match ($erro) {
            ErrorType::NotFound => 'Recurso não encontrado' . PHP_EOL,
            ErrorType::Unauthorized => 'Acesso não autorizado' . PHP_EOL,
            ErrorType::ServerError => 'Erro no servidor' . PHP_EOL,
        };
    }
}