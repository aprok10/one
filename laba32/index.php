<?php
require_once (__DIR__.'/file.php');

$files = scandir(__DIR__);

foreach ($files as $file) {
    if ($file == '.' || $file == '..') {
        continue;
    }
    $path = __DIR__ . '\\' . $file;
   // echo $path."\n";
    $file = new File($path);
    $file->fileName($path);
    $file->fileSize($path);
    $file->filePrint();
    //printf("файл: %s")

}
unset($file);
die('00');
?>
$path = 'C:\\1\\amplua.mp3';

$x = new File($path);


//if (is_object($x)) {
//    print_r($x);}
//else echo('Это не обьект');

/**$filePath="C:\\1\\amplua.mp3";
$size=filesize($filePath);

echo $filePath .' ИЗ '. $size . " байт\n";

$dateFormat="D d M Y g:i";
$atime=fileatime($filePath);
$mtime=filemtime($filePath);
$ctime=filectime($filePath);
echo $filePath." was accessed on " .date($dateFormat, $atime).".\n";
echo $filePath." was modified on " .date($dateFormat, $mtime).".\n";
echo $filePath." was changed on " .date($dateFormat, $ctime).".";
*/



?>