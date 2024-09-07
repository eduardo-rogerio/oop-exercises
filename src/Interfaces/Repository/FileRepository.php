<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Repository;

class FileRepository implements DataRepository
{
    private array $data;

    public function __construct(public string $file)
    {
    }

    public function saveData(array $data): array
    {
        $this->data = $data;
        return [
            'message' => "dados salvos com sucesso no arquivo {$this->file}",
            $this->file => $this->data
        ];
    }

    public function loadData($name): array
    {
        if($name !== $this->file){
            return [
                'message' => "arquivo {$name} não encontrado",
                'data' => null
            ];
        }
        return [
          'message' => "lendo o arquivo {$this->file}",
          'data' => $this->data
        ];
    }
}