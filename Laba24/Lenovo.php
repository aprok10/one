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
        $this->computerName = 'Lenovo E50-00';
        $this->cpu = 'Intel Pentium Quad Core J2900 (2.41 GHz)';
        $this->ozu = '4 Gb';
        $this->video = 'Intel HD Graphics';
        $this->hdd = 'HDD 1 Tb';
    }

    public function identifyUser()
    {
        echo $this->computerName . ': Identify by fingerprints' . PHP_EOL;
    }
}


?>