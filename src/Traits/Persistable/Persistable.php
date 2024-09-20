<?php

namespace OopExercises\Traits\Persistable;

trait Persistable
{
    public function save(): string
    {
        return 'Salvando ' . $this->name;
    }

    public function load(): string
    {
        return 'Lendo arquivo ' . $this->name;
    }
}