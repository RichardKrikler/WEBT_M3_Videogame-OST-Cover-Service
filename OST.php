<?php

class OST implements JsonSerializable
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGameName(): string
    {
        return $this->gameName;
    }

    /**
     * @return string
     */
    public function getReleaseYear(): string
    {
        return $this->releaseYear;
    }

    /**
     * @return array
     */
    public function getTrackList(): array
    {
        return $this->trackList;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'gameName' => $this->getGameName(),
            'releaseYear' => $this->getReleaseYear(),
            'trackList' => $this->getTrackList()
        ];
    }
}

