<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Documents;

class Reader
{
    public function __construct(public Document $document)
    {
    }

    public function read(): string
    {
        return $this->document->open();
    }
}