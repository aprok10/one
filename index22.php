<?php
//лаба 2
/**
 * Creating variables with different data types
 *
 * Author: Prokopenko
 * Company: BrainAcademy
 * Date: 29.03.2018
 */
echo("Лаба 2.2 определение переменных\n"); //вывод текста
$boolean = true;
$integer = 25;
$float = 5.25;
$string = 'Всё будет';



echo 'boolean = ';
var_dump($boolean);

echo "integer = ";
var_dump($integer++);

echo "float = ";
$float = $integer + $float;
var_dump($float);

echo '$string = ';
$string .= ' хорошо!';

echo $string;
echo"\n";
$h = date('H');
$m = date('i');
echo ("до конца работы ". $h. ' часа(ов) '. $m. ' минут.');

die("\n0");
?>