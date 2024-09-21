<?php

namespace OopExercises\Traits\Serializable;

class Order
{
    use Serializable;

    public function __construct(public string $product, public string $price)
    {
    }
}