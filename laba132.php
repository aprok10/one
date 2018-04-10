<?php

echo ("генерируем огурцы - ");
$a = mt_rand(1, 20);
//$a =5;
echo "$a\n";
if ($a == 1) {$suffics = 'ец';}
        elseif ($a <= 4) {$suffics = 'ца';}
            else $suffics = 'цов';
$cuc = "{$a} огур{$suffics} на столе";
echo $cuc;
?>