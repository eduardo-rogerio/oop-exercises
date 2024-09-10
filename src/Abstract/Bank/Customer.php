<?php

namespace OopExercises\Abstract\Bank;

class Customer
{
    public function __construct(public $name, public $agency, public $accountNumber)
    {
    }
}