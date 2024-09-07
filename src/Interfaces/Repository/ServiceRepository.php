<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Repository;

final class ServiceRepository
{
    public function __construct(public DataRepository $repository)
    {
    }

    public function save(array $data): array
    {
        return $this->repository->saveData($data);
    }

    public function get($name): array
    {
        return $this->repository->loadData($name);
    }
}