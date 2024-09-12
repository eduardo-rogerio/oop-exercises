<?php

namespace OopExercises\Abstract\Freight;

abstract class CargoTransport
{
    abstract public function loadCargo(): string;

    abstract public function unloadCargo(): string;

    abstract public function calculateCost(): string;
}