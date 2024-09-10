<?php

namespace OopExercises\Abstract\Documents;

use OopExercises\Abstract\Documents\Document;

class ExcelDocument extends Document
{

    public function print(): string
    {
        return 'Imprimindo arquivo excel...';
    }

    public function open(): string
    {
        return 'Abrindo arquivo excel...';
    }

    public function close(): string
    {
        return 'Fechando arquivo excel...';
    }
}