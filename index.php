<?php

use OopExercises\Interfaces\Listener\CacheEventListener;
use OopExercises\Interfaces\Listener\DatabaseEventListener;
use OopExercises\Interfaces\Listener\Event;

require 'vendor/autoload.php';

$database = new DatabaseEventListener();
$cache = new CacheEventListener();
$event1 = new Event($database);
$event2 = new Event($cache);

dump($event1->dispath('create'),$event2->dispath('forgot'));