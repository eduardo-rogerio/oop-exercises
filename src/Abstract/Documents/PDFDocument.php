<?php

namespace OopExercises\Abstract\Documents;

use OopExercises\Abstract\Documents\Document;

class PDFDocument extends Document
{

    public function print(): string
    {
        return 'Imprimindo documento PDF...';
    }

    public function open(): string
    {
        return 'Abrindo documento PDF...';
    }

    public function close(): string
    {
        return 'Fechando documento PDF...';
    }
}