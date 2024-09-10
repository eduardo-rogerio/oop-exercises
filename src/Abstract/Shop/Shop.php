<?php

namespace OopExercises\Abstract\Shop;

class Shop
{
    public function __construct(public Product $product)
    {
    }

    public function showProduct(): string
    {
        return 'Produto: ' . $this->product->getDescription() . ' - ' . $this->product->getPrice();
    }
}