<?php

class Song
{
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    /**
     * @param int $id
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param float $duration
     */
    public function __construct(int $id, string $name, string $artist, int $trackNumber, float $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }
}
