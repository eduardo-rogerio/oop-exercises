<?php

namespace OopExercises\Abstract\Freight;

use OopExercises\Abstract\Freight\CargoTransport;

class TruckTransport extends CargoTransport
{

    public function loadCargo(): string
    {
        return 'Coloca a carga no caminhão...';
    }

    public function unloadCargo(): string
    {
        return 'Retira a carga do caminhão...';
    }

    public function calculateCost(): string
    {
        return 'Calcula o custo do transporte por caminhão...';
    }
}