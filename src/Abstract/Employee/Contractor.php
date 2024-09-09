<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Employee;

class Contractor
{
    public function calculateEmployeeSalary(Employee $employee): string
    {
        return $employee->getDetails() . ' ' . $employee->calculateSalary();
    }
}