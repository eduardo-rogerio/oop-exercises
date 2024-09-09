<?php

declare(strict_types=1);

namespace OopExercises\Abstract;

class Bus extends Transport
{

    public function start(): string
    {
        return 'Dá partida no ônibus';
    }

    public function stop(): string
    {
        return 'Para o ônibus';
    }

    public function move(): string
    {
        return 'acelera o ônibus';
    }
}