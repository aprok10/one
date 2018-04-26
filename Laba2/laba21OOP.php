<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 14.04.2018
 * Time: 14:42
 */
$i=1;
$power = true;
function  start($power) {
    if ($power == false){echo 'function start, power "ON"', PHP_EOL; $power = true;}
      else {echo"the computer is already on \n";}
    return $power;}
function shutdown($power) {
    if ($power == true){echo "function stop, power \"OFF\" \n"; $power = false;}
      else echo"wsrning! power \"OFF\"";
    return $power;}
function restart() {
    if (!$power == true ) {echo "function restart\n";
        echo $power;
        for ($i==1; $i<5; $i++){
            echo '. ';
            sleep(1);
        }
        echo "\n Power on = ","$power";
        // echo ("$power");
    }
    else {echo"wsrning! power \"OFF\"";
        $power = false;}
    echo ($power);
    return ($power);
}
$x = start($power );
echo 'power on ';
echo $x, PHP_EOL;
echo restart($power);
echo "\n";
$power=false;
echo shutdown($power);
echo $power, "\n";

die('5');
?>