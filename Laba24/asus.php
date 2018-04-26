<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 20.04.2018
 * Time: 14:33
 */
class Asus extends Computer
{
    const IS_DESKTOP = false;

    public function __construct()
    {
        $this->computerName = 'Asus X540LJ';
        $this->cpu = 'Intel Core i3-4005U (1.7 Ghz)';
        $this->ozu = 'RAM 6 Gb';
        $this->video = 'nVidia GeForce GT 920M';
        $this->hdd = 'HDD 1 Tb';
    }
}


?>