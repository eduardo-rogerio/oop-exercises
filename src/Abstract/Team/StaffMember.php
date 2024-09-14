<?php

namespace OopExercises\Abstract\Team;

abstract class StaffMember
{
    abstract public function calculateBonus(): int;

    abstract public function getJobTitle(): string;
}