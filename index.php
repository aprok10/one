<?php


//require_once(__DIR__ . '/File.php');
$files = scandir(__DIR__);

foreach ($files as $file) {
    if ($file == '.' || $file == '..') {
        continue;
    }
    $fileRoot = __DIR__ . '\\' . $file;
    echo $fileRoot."\n";

}
unset($file);
die('00');
?>