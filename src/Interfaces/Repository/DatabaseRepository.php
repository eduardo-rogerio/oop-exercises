<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Repository;

class DatabaseRepository implements DataRepository
{
    private array $data;

    public function __construct(public string $table)
    {
    }

    public function saveData(array $data): array
    {
        $this->data = $data;
        return [
            'message' => "Salvando dado na tabela {$this->table}",
            'data' => $data
        ];
    }

    public function loadData(string $name): array
    {
        if($name !== $this->table){
            return [
                'message' => 'Tabela não encontrada',
                'data' => null
            ];
        }

        return [
            'message' => 'Sucesso!!',
            'data' => $this->data
        ];
    }
}