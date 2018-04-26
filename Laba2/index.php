<?php

/*class Computer
{
    public $Is_DESKTOP = true ; //?
    public $cpu = 3;
    public $ozu = 12;
    public $video = 'Radeon';
    public $hdd = 500;
    public $power = false;

    public function start()
    {
        if ($this->power == false) {
            echo 'power "ON": ';
            $this->power = true;
            var_dump ($this->power);
        } else {echo "the computer is already on \n";}
        return $this->power;
    }

    public function shutdown()
    {echo "function shutdown\n";
        if ($this->power == true) {
            $this->power = false;
            echo "Power off \n", "$this->power\n";
            }
      else echo "OFF power\n .";
        return $this->power;
    }

    public function restart()
    {   $i=1;
        echo "function restart\n";
        if ($this->power == true) {
            for ($i == 1; $i < 5; $i++) {
                echo '. ';
                sleep(1);
            }
            echo "\nPower on = ", "$this->power\n";}
        else {
            echo "wsrning! power \"OFF\"";
            $this->power = false;
        }
        return ($this->power);
    }

}

$comp = new Computer();
if (is_object($comp)) {
    print_r($comp);}
else echo('Это не обьект');

var_dump($comp->power);
$comp->start($power);
//var_dump($power);
//echo "\n $power\n";
$comp->restart($power);
//var_dump($power);
$comp->shutdown($power);
//var_dump($power);
$comp->restart($power);

die ("\n00");
?>
