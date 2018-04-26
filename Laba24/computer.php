<?php

class Computer
{
    public $IS_DESKTOP = true; //?
    protected $cpu;
    protected $ozu;
    protected $video;
    protected $hdd;
    private $power = false;
    protected $computerName='Computer';

    public function identifyUser(){}

    public function start()
    {
        if ($this->power == false) {
            echo 'power "ON": ';
            echo $this->computerName. PHP_EOL;
            $this->power = true;
            //var_dump ($this->power);
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

    public function printParameters(){
        if ($this->power){
            echo "<<<<<<<<<<<<<<<\n". $this->computerName. "\n";
            echo $this->cpu. "\n";
            echo $this->ozu. "\n";
            echo $this->video. "\n";
            echo $this->hdd. "\n>>>>>>>>>>>>>>>>\n";
        }
        else echo 'computer OFF!';
    }
}

//die ("\n00");
?>
