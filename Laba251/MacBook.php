<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 20.04.2018
 * Time: 14:36
 */
class MacBook extends Computer
{
    const IS_DESKTOP = false;

    public function __construct()
    {
        $this->setcomputerName('Apple MacBook Air 13"')
             ->setCpu('Intel Core i5 (1.6 - 2.7 GHz)')
             ->setOzu('RAM 8 Gb')
             ->setVideo('Intel HD Graphics 6000')
             ->setHdd('SSD 256 Gb');
    }

    public function identifyUser()
    {
        echo $this->getcomputerName() . ': Identify by Apple ID' . PHP_EOL;
    }
}

?>