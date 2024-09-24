<?php

namespace OopExercises\Traits\Counter;

trait InstanceCounter
{
    private static $instanceCount = 0;

    public function __construct()
    {
        self::$instanceCount++;
    }

    public static function getInstanceCount(): int
    {
        return self::$instanceCount;
    }
}