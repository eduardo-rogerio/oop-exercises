<?php

declare(strict_types=1);

use OopExercises\Abstract\Documents\Reader;
use OopExercises\Abstract\Documents\WordDocument;

require 'vendor/autoload.php';

$word = new WordDocument;
$reader = new Reader($word);
dump($reader->read());
