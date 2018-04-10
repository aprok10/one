<?php
/**
 * Created by PhpStorm.
 * User: ААА
 * Date: 06.04.2018
 * Time: 19:38
 */
$hour = date('D d M Y H:i');
print_r($hour);
echo "\n";
$a = date('D');
$h = date('H');
$m = date('i');
//$m = intval(400);
echo "\n$h";
echo ":$m\n";
//if( $h>"23" && $m>intval(59)) {echo $m; die('не допустимые значения времени. проверьте данные');}
//    else echo "поехали\n";

switch ($a) {
    case 'Mon': {echo "Сегодня понедельник"; break;}
    case 'Tue': {echo "Сегодня вторник"; break;}
    case 'Wed': {echo "Сегодня среда"; break;}
    case 'Thu': {echo "Сегодня четверг"; break;}
    case 'Fri': {echo "Сегодня пятница"; break;}
    default: { echo "Ура выходные!";} // die(' ни каких работ!!!');}
    };

if($h >= 9 && $h < 18) {
        if ($m != intval("0")) {
            $h = 17 - $h;
            $m = 60 - $m;
            echo(" до конца работы " . $h . ' часа(ов) ' . $m . ' минут.');
        }
        else {
            $h = 18 - $h;
            echo(" до конца работы " . $h . ' часа(ов) ' . $m . ' минут.');
        }
        }
        elseif ($h < 9){if ($m != intval("0")) {
                    $h = 8 - $h;
                    $m = 60 - $m;
                    echo(" до начала работы " . $h . ' часа(ов) ' . $m . ' минут.');
                }
                        else {$h = 9 - $h;
                            echo(" до начала работы " . $h . ' часа(ов) ' . $m . ' минут.');
                            }
                   }
        elseif ($h >= 18 && $h <= 23){ if ($m != intval("0")) {
                                             $h = $h - 18;
                                             echo(" рабочий день закончился " . $h . ' часа(ов) ' . $m . ' минут.');
                                            }
                                            else {
                                                     $h = $h - 18;
                                                     echo(" рабочий день закончился " . $h . ' часа(ов) ' . $m . ' минут.');
                                                     }

                                   }
die("\nВсё OK!")
?>