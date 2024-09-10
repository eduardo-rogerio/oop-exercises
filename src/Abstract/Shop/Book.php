<?php

namespace OopExercises\Abstract\Shop;

use OopExercises\Abstract\Shop\Product;

class Book extends Product
{
    public int $price = 50;

    public function getPrice(): string
    {
        return 'Preço R$ ' . $this->price . ' por unidade';
    }

    public function getDescription(): string
    {
        return 'Código Limpo';
    }
}