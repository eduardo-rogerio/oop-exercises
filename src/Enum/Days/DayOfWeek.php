<?php

namespace OopExercises\Enum\Days;

enum DayOfWeek: string
{
    case Monday = 'monday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
    case Trursday = 'thursday';
    case Friday = 'friday';
    case Saturday = 'saturday';
    case Sunday = 'sunday';

    public function isWeekend(): bool
    {
        return match ($this) {
            self::Saturday, self::Sunday => true,
            default => false,
        };
    }

    public function businessDay(): bool
    {
        return match($this){
            self::Saturday, self::Sunday => false,
            default => true,
        };
    }
}
