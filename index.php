<?php

declare(strict_types=1);

use OopExercises\Traits\Serializable\Book;
use OopExercises\Traits\Serializable\Order;
use OopExercises\Traits\Serializable\Person;

require 'vendor/autoload.php';

$person = new Person('Afonso', 'afonso@email.com');
$order = new Order('teclado', 'R$ 350,00');
$book = new Book('Sistemas Operacionais: Projeto e Implementação', '978-8577800575');

dump($person->serialize(), $order->serialize(), $book->serialize());
