<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Employee;

class PartTimeEmployee extends Employee
{
    public static string $position = 'Estagiário';

    public int $grossSalary = 1300;

    public int $mandatoryDiscounts = 220;

    public int $extraDiscounts = 120;

    public function calculateSalary(): string
    {
        $netSalary = $this->grossSalary - ($this->mandatoryDiscounts + $this->extraDiscounts);

        return 'Salario R$ ' . $netSalary;
    }
}