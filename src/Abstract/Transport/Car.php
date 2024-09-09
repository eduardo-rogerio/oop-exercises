<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Transport;

class Car extends Transport
{

    public function start(): string
    {
        return 'Dá partida no carro...';
    }

    public function stop(): string
    {
        return 'Para o carro';
    }

    public function move(): string
    {
        return 'Acelera o carro';
    }
}