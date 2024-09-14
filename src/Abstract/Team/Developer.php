<?php

namespace OopExercises\Abstract\Team;

use OopExercises\Abstract\Team\StaffMember;

class Developer extends StaffMember
{

    public function calculateBonus(): int
    {
        return 500;
    }

    public function getJobTitle(): string
    {
        return 'Developer';
    }
}