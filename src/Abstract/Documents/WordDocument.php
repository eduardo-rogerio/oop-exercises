<?php

namespace OopExercises\Abstract\Documents;

use OopExercises\Abstract\Documents\Document;

class WordDocument extends Document
{
    public function print(): string
    {
        return 'Imprimindo documento Word...';
    }

    public function open(): string
    {
        return 'Abrindo documento Word...';
    }

    public function close(): string
    {
        return 'Fechando documento Word...';
    }
}