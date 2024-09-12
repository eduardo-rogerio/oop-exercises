<?php

namespace OopExercises\Abstract\Play;

use OopExercises\Abstract\Play\Game;

class VideoGame extends Game
{

    public function startGame(): string
    {
        return 'Loding game...';
    }

    public function endGame(): string
    {
        return 'Game Over!';
    }

    public function play(): string
    {
        return 'Playing video game...';
    }
}