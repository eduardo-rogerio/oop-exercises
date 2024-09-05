<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\MidiaPlay;

class AudioPlayer implements Playable
{
    private string $music;

    public function play(string $fileName): void
    {
        $this->music = $fileName;
        echo "Tocando {$fileName}" . PHP_EOL;
    }

    public function stop(): void
    {
        echo "Parou de Tocar {$this->music}" . PHP_EOL;
    }
}