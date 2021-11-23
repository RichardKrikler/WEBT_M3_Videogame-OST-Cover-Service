<?php
require_once 'OST.php';
require_once 'Track.php';

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
            new Track(0, 'Evil Mushrooms', 'Jakobob', 0, 1.34),
            new Track(1, 'Friendly Mushrooms', 'Jakobob', 1, 3.06),
            new Track(2, 'Koppas', 'Jakobob', 2, 2.45),
            new Track(3, 'All Mushrooms', 'Jakobob', 3, 9.00)
        ]);

        $this->osts[] = new OST(2, 'Breath of the Wild', 'Zelda', '2010', [
            new Track(0, 'Breath it in', 'Richardo', 0, 3.45),
            new Track(1, 'Breath it out', 'Richardo', 1, 2.56),
            new Track(2, 'Breath it Around', 'Richardo', 2, 4.00),
            new Track(3, 'Breath it over the Mountain', 'Richardo', 3, 6.23)
        ]);
    }

    /**
     * @return array
     */
    public function getOsts(): array
    {
        return $this->osts;
    }
}
