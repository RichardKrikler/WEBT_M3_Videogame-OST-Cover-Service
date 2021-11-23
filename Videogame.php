<?php

class Videogame
{
    private $id;
    private $name;
    private $gameName;
    private $releaseYear;
    private $trackList;

    /**
     * @param int $id
     * @param string $name
     * @param string $gameName
     * @param string $releaseYear
     * @param array $trackList
     */
    public function __construct(int $id, string $name, string $gameName, string $releaseYear, array $trackList)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gameName = $gameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }
}