<?php

namespace OopExercises\Abstract\Freight;

use OopExercises\Abstract\Freight\CargoTransport;

class AirTransport extends CargoTransport
{

    public function loadCargo(): string
    {
        return 'Coloca a carga no avião...';
    }

    public function unloadCargo(): string
    {
        return 'Retira a carga do avião...';
    }

    public function calculateCost(): string
    {
        return 'Calcula o custo do transporte por avião...';
    }
}