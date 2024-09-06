<?php

declare(strict_types=1);

use OopExercises\Interfaces\Filter\BlurFilter;
use OopExercises\Interfaces\Filter\GrayscaleFilter;
use OopExercises\Interfaces\Filter\Image;

require 'vendor/autoload.php';

$grayscale = new GrayscaleFilter();
$blur = new BlurFilter();
$image = new Image();

dump($image->filter($grayscale), $image->filter($blur));