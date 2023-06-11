<?php 

class Animal{
protected $parla;

function __construct($meuParla) {
$this->parla = $meuParla;

}

function makeSound(){
echo $this->parla."\n";

}

}

?>