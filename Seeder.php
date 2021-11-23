<?php

class Seeder
{
    private $ost1;
    private $ost2;
    private $ost3;
    public $AllOsts;

    /**
     * default Constructor
     */
    public function __construct()
    {
        $ost1 = new Videogame(0, 'Blocks', 'Minecraft', '2001', [
            new Song(0, 'NBlock 1', 'Hadi Tlais', 0, 2.12),
            new Song(1, 'NBlock 2', 'Hadi Tlais', 1, 3.59),
            new Song(2, 'NBlock 3', 'Hadi Tlais', 2, 9.00),
            new Song(3, 'NBlock 4', 'Hadi Tlais', 0, 2.40)
        ]);

        $ost2 = new Videogame(1, 'Mushrooms', 'Super Mario 2', '2005', [
            new Song(0, 'Evil Mushrooms', 'Jakobob', 0, 1.34),
            new Song(1, 'Friendly Mushrooms', 'Jakobob', 1, 3.06),
            new Song(2, 'Koppas', 'Jakobob', 2, 2.45),
            new Song(3, 'All Mushrooms', 'Jakobob', 3, 9.00)
        ]);

        $ost3 = new Videogame(2, 'Breath of the Wild', 'Zelda', '2010', [
            new Song(0, 'Breath it in', 'Richardo', 0, 3.45),
            new Song(1, 'Breath it out', 'Richardo', 1, 2.56),
            new Song(2, 'Breath it Around', 'Richardo', 2, 4.00),
            new Song(3, 'Breath it over the Mountain', 'Richardo', 3, 6.23)
        ]);

        $AllOsts = [$ost1, $ost2, $ost3];
    }

    /**
     * @return mixed
     */
    public function getAllOsts()
    {
        return $this->AllOsts;
    }
}
