<?php

namespace OopExercises\Abstract\Play;

use OopExercises\Abstract\Play\Game;

class Chess extends Game
{

    public function startGame(): string
    {
        return 'Brancas jogam...';
    }

    public function endGame(): string
    {
        return 'Checkmate!';
    }

    public function play(): string
    {
        return 'Jogando xadrez...';
    }
}