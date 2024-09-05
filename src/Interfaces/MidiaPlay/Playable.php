<?php

declare(strict_types=1);

namespace OopExercises\Interfaces\MidiaPlay;

interface Playable
{
    public function play(string $fileName):void;

    public function stop():void;
}