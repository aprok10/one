<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 20.04.2018
 * Time: 14:34
 */
class Lenovo extends Computer
{
    const IS_DESKTOP = true;

    public function __construct()
    {
        $this->setcomputerName('Lenovo E50-00')
             ->setCpu('Intel Pentium Quad Core J2900 (2.41 GHz)')
             ->setOzu('4 Gb')
             ->setVideo('Intel HD Graphics')
             ->setHdd('HDD 1 Tb');
    }

    public function identifyUser()
    {
        echo $this->getcomputerName() . ': Identify by fingerprints' . PHP_EOL;
    }
}
?>