<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\MidiaPlay;

class VideoPlayer implements Playable
{
    private string $video;

    public function play(string $fileName): void
    {
        $this->video = $fileName;
        echo "Exibindo video {$fileName}" . PHP_EOL;
    }

    public function stop(): void
    {
        echo "Parou o video {$this->video}" . PHP_EOL;
    }
}