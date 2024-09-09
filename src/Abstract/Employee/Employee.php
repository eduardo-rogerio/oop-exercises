<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Employee;

abstract class Employee
{
    protected static string $position;

    protected int $grossSalary;

    protected int $mandatoryDiscounts;

    protected int $extraDiscounts;

    abstract public function calculateSalary(): string;

    public function getDetails(): string
    {
        return 'Trabalha de ' . static::$position;
    }
}