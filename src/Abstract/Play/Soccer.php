<?php

namespace OopExercises\Abstract\Play;

use OopExercises\Abstract\Play\Game;

class Soccer extends Game
{

    public function startGame(): string
    {
        return 'Apita o árbitro...';
    }

    public function endGame(): string
    {
        return 'Fim de jogo!';
    }

    public function play(): string
    {
        return 'Jogando futebol...';
    }
}