<?php

namespace OopExercises\Abstract\Team;

use OopExercises\Abstract\Team\StaffMember;

class Designer extends StaffMember
{

    public function calculateBonus(): int
    {
        return 750;
    }

    public function getJobTitle(): string
    {
        return 'Designer';
    }
}