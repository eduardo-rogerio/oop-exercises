<?php

namespace OopExercises\Abstract\Shop;

abstract class Product
{
    abstract public function getPrice(): string;

    abstract public function getDescription(): string;
}