<?php
class File{
    private $file;
    private $size;
    function __construct($path)
     {
        if (!file_exists($path)) {
            echo $this->fileName($path) . " does not exist.";

        }
     }
public function fileName($path){
    $this->file= basename($path);
    return $this->file;
    }
public function fileSize($path){
    $this->size=filesize($path);
    //switch ()
    }
    public function filePrint(){
    echo "файл: ", $this->file, "   \t| размер: ", $this->size, " байт". PHP_EOL;

    }

}

?>