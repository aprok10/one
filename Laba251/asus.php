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
        $this->setcomputerName('Asus X540LJ')
             ->setCpu('Intel Core i3-4005U (1.7 Ghz)')
             ->setOzu('RAM 6 Gb')
             ->setVideo('nVidia GeForce GT 920M')
             ->setHdd('HDD 1 Tb');
    }
}


?>