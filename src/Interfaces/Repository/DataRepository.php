<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\Repository;

interface DataRepository
{
    public function saveData(array $data): array;

    public function loadData(string $name): array;
}