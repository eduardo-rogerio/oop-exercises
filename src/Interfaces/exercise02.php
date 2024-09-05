<?php

declare(strict_types=1);

interface Playable
{
    public function play(string $fileName):void;

    public function stop():void;
}

class AudioPlayer implements Playable
{
    private string $music;

    public function play(string $fileName): void
    {
        $this->music = $fileName;
        echo "Tocando {$fileName}".PHP_EOL;
    }

    public function stop(): void
    {
        echo "Parou de Tocar {$this->music}".PHP_EOL;
    }
}

class VideoPlayer implements Playable
{
    private string $video;
    public function play(string $fileName): void
    {
        $this->video = $fileName;
        echo "Exibindo video {$fileName}".PHP_EOL;
    }

    public function stop(): void
    {
        echo "Parou o video {$this->video}".PHP_EOL;
    }
}

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

$audioPlayer = new AudioPlayer();
$mediaPlay = new MidiaPlay($audioPlayer);

$mediaPlay->play('Mulher de fases');
$mediaPlay->stop();