<?php

require_once(__DIR__ .'/computer.php');
require_once(__DIR__ .'/asus.php');
require_once(__DIR__ .'/Lenovo.php');
require_once(__DIR__ .'/MacBook.php');

$macBook = new MacBook();
$macBook->start();
$macBook->printParameters();
$macBook->identifyUser();
echo PHP_EOL;

$as = new Asus();
$as->start();
$as->printParameters();
$as->identifyUser();
echo PHP_EOL;

$lvo = new Lenovo();
$lvo->start();
$lvo->printParameters();
$lvo->identifyUser();

die("\n00");
?>