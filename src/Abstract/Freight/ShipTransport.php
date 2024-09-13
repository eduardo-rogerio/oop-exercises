<?php

namespace OopExercises\Abstract\Freight;

use OopExercises\Abstract\Freight\CargoTransport;

class ShipTransport extends CargoTransport
{

    public function loadCargo(): string
    {
        return 'Coloca a carga no navio...';
    }

    public function unloadCargo(): string
    {
        return 'Retira a carga do navio...';
    }

    public function calculateCost(): string
    {
        return 'R$ 1.800,00 por tonelada';
    }
}