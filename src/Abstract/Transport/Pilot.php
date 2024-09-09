<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Transport;

class Pilot
{
    public function __construct(public Transport $transport)
    {
    }

    public function run(): string
    {
        return $this->transport->start() . "\n" . $this->transport->move();
    }

    public function brakes(): string
    {
        return $this->transport->stop();
    }
}