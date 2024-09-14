<?php

namespace OopExercises\Abstract\Team;

use OopExercises\Abstract\Team\StaffMember;

class Manager extends StaffMember
{

    public function calculateBonus(): int
    {
        return 1000;
    }

    public function getJobTitle(): string
    {
        return 'Manager';
    }
}