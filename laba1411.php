<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 10.04.2018
 * Time: 13:10
 */

$firstNumber = isset($argv[1]) ? trim($argv[1]) : 0;
$operation = isset($argv[2]) ? trim($argv[2]) : null;
$secondNumber = isset($argv[3]) ? trim($argv[3]) : 0;

if (empty($operation)) {
    die('Operation symbol is required');
}

switch ($operation) {
    case '*':
        echo $firstNumber * $secondNumber;
        break;
    case '/':
        if ($secondNumber == 0) {
            die ('Zero division is not allowed');
        }
        echo $firstNumber / $secondNumber;
        break;
    case '+';
        echo $firstNumber + $secondNumber;
        break;
    case '-':
        echo $firstNumber - $secondNumber;
        break;
    default:
        echo "Operation {$operation} is not allowed";
}

?>

