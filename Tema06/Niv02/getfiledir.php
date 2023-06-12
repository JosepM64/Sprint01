<?php 
// Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer i el directori del fitxer utilitzant constants màgiques. 
class GetFileDir{
    
    private $filePath;

    public function __construct($filePath){
        $this->filePath = $filePath;
    }

    public function getFile() {
        return $this->filePath;
    }
    public function getDir() {
        return $this->filePath;
    }
    
}

?>
