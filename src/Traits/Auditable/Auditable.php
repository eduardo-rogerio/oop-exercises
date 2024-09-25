<?php

namespace OopExercises\Traits\Auditable;

trait Auditable
{
    public function recordCreation()
    {
        echo static::class . "Created at " . date('Y-m-d H:i:s') . PHP_EOL;
    }

    public function recordUpdate()
    {
        echo static::class . "Updated at " . date('Y-m-d H:i:s') . PHP_EOL;
    }
}