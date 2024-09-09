<?php

declare(strict_types=1);

namespace OopExercises\Abstract;

abstract class Transport
{
    abstract public function start(): string;

    abstract public function stop(): string;

    abstract public function move(): string;
}