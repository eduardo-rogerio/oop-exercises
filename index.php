<?php

declare(strict_types=1);

use OopExercises\Abstract\Shop\Book;
use OopExercises\Abstract\Shop\Clothing;
use OopExercises\Abstract\Shop\Shop;

require 'vendor/autoload.php';

$book = new Book;
$clothing = new Clothing;
$shop = new Shop($clothing);

dump($shop->showProduct());
