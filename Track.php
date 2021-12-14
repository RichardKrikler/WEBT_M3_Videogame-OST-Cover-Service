<?php

class Track implements JsonSerializable
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
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @return int
     */
    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'artist' => $this->getArtist(),
            'trackNumber' => $this->getTrackNumber(),
            'duration' => $this->getDuration()
        ];
    }
}
