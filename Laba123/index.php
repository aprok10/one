<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 23.04.2018
 * Time: 23:00
 */
echo '$_SERVER: ';
var_dump($_SERVER);

echo '==============' . PHP_EOL;

$_GET['test'] = '123';
$_GET['qwerty'] = 'some-data';

echo '$_GET: ';
var_dump($_GET);


    ?>