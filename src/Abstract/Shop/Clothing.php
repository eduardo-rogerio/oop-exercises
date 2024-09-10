<?php

namespace OopExercises\Abstract\Shop;

use OopExercises\Abstract\Shop\Product;

class Clothing extends Product
{
    private int $price = 100;

    public function getPrice(): string
    {
        return 'Valor por peça R$ ' . $this->price;
    }

    public function getDescription(): string
    {
        return 'Camisa';
    }
}