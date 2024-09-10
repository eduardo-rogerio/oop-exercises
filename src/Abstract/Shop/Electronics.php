<?php

namespace OopExercises\Abstract\Shop;

use OopExercises\Abstract\Shop\Product;

class Electronics extends Product
{
    private int $price = 750;

    public function getPrice(): string
    {
        return 'Valor minimo R$ ' . $this->price;
    }

    public function getDescription(): string
    {
        return 'Memoria ram DDR5';
    }
}