<?php

namespace OopExercises\Traits\Shippable;

trait Shippable
{
    public function calculateShippingCost(int $tax, int $km): string
    {
        return 'Preço: R$ ' . $tax * $km;
    }

    public function trackShipment(string $code): string
    {
        return $code . 'Encomenda saiu para entrega';
    }
}