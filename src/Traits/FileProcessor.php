<?php

namespace OopExercises\Traits;

class FileProcessor
{
    use Logger;

    private string $file;

    public function process(string $file): string
    {
        $this->file = $file;
        return $this->log('Processing file: ' . $file);
    }
}