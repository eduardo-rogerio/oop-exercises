<?php

namespace OopExercises\Traits\Scorable;

trait Scorable
{
    public function increaseScore(int $points): int
    {
        return $this->points += $points;
    }

    public function decreaseScore(int $points): int
    {
        return $this->points -= $points;
    }
}