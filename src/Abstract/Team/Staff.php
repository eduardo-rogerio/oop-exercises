<?php

namespace OopExercises\Abstract\Team;

class Staff
{
    private $members = [];

    public function addMember(StaffMember $member)
    {
        $this->members[] = $member;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function calculateBonus(): int
    {
        $bonus = 0;
        foreach ($this->members as $member) {
            $bonus += $member->calculateBonus();
        }
        return $bonus;
    }
}