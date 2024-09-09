<?php

declare(strict_types=1);

namespace OopExercises\Abstract;

class Bike extends Transport
{

    public function start(): string
    {
        return 'Monta na bike';
    }

    public function stop(): string
    {
        return 'Para a bike';
    }

    public function move(): string
    {
        return 'Pedala...';
    }
}