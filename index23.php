<?php
//лаба 2.3
/**
 * Creating variables with different data types
 *
 * Author: Prokopenko
 * Company: BrainAcademy
 * Date: 31.03.2018
 */
echo("Лаба 2.3 математические операции, сравнение чисел\n"); //вывод текста

settype($a, "qwert");
echo "$a";
settype($b, "25");
//$b =true;
echo "\n$b\n";
echo gettype($a),"  ", gettype($b);
echo"\n";

// var_dump($a.= $b);
print("$a");
$c = intval($a);
echo "\n'$c'";
print_r($c);
die("\n5");


?>