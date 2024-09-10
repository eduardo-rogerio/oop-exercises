<?php

namespace OopExercises\Abstract\Play;

abstract class Game
{
    abstract public function startGame(): string;

    abstract public function endGame(): string;

    abstract public function play(): string;
}