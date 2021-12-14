<?php
require_once 'OST.php';
require_once 'Track.php';
require_once 'DB_OST.php';
require_once 'DB_Track.php';

class Seeder
{
    private $osts;

    /**
     * default Constructor
     */
    public function __construct()
    {
        $this->osts[] = new OST(0, 'Blocks', 'Minecraft', '2001', [
            new Track(0, 'NBlock 1', 'Hadi Tlais', 0, 2.12),
            new Track(1, 'NBlock 2', 'Hadi Tlais', 1, 3.59),
            new Track(2, 'NBlock 3', 'Hadi Tlais', 2, 9.00),
            new Track(3, 'NBlock 4', 'Hadi Tlais', 0, 2.40)
        ]);

        $this->osts[] = new OST(1, 'Mushrooms', 'Super Mario 2', '2005', [
            new Track(4, 'Evil Mushrooms', 'Jakobob', 0, 1.34),
            new Track(5, 'Friendly Mushrooms', 'Jakobob', 1, 3.06),
            new Track(6, 'Koppas', 'Jakobob', 2, 2.45),
            new Track(7, 'All Mushrooms', 'Jakobob', 3, 9.00)
        ]);

        $this->osts[] = new OST(2, 'Breath of the Wild', 'Zelda', '2010', [
            new Track(8, 'Breath it in', 'Richardo', 0, 3.45),
            new Track(9, 'Breath it out', 'Richardo', 1, 2.56),
            new Track(10, 'Breath it Around', 'Richardo', 2, 4.00),
            new Track(11, 'Breath it over the Mountain', 'Richardo', 3, 6.23)
        ]);

        foreach ($this->getOsts() as $ost) {
            DB_OST::insertOST($ost->getId(), $ost->getName(), $ost->getGameName(), $ost->getReleaseYear());
            foreach ($ost->getTrackList() as $track) {
                DB_Track::insertTrack($track->getId(), $track->getName(), $track->getArtist(), $track->getTrackNumber(), $track->getDuration(), $ost->getId());
            }
        }
    }

    /**
     * @return array
     */
    public function getOsts(): array
    {
        return $this->osts;
    }
}
