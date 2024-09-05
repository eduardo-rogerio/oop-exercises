<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\MidiaPlay;

class MidiaPlay
{
    public function __construct(public Playable $media)
    {
    }

    public function play(string $name)
    {
        $this->media->play($name);
    }

    public function stop()
    {
        $this->media->stop();
    }
}