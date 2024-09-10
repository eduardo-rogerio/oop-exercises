<?php

declare(strict_types=1);

namespace OopExercises\Abstract\Documents;

abstract class Document
{
    abstract public function print() : string;

    abstract public function open(): string;

    abstract public function close(): string;
}