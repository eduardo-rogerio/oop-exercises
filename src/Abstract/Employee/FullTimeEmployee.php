<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Employee;

class FullTimeEmployee extends Employee
{
    public static string $position = 'Contador';

    public int $grossSalary = 2300;

    public int $mandatoryDiscounts = 320;

    public int $extraDiscounts = 120;

    public function calculateSalary(): string
    {
        $netSalary = $this->grossSalary - ($this->mandatoryDiscounts + $this->extraDiscounts);

        return 'Salario R$ ' . $netSalary;
    }
}