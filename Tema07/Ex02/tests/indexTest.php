<?php 

include 'src/Index.php';

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{

// Se declaran las variables que se vayan a utilizar en las pruebas,

private $gos;
private $gat;

protected function setUp(): void
{
    $this->gos = new Gos("Rintintin");
    $this->gat = new Gat("Marramiau");
}


public function testMakeSound() {

// Esperem que el so del gos sigui "Soc un gos: bup, bup, bup, bup\n"
        $expectedGos = "Soc un gos: bup, bup, bup, bup\n";
        // El del gat sigui "Soc un gat: Miauuuuuuuuuu\n"
        $expectedGat = "Soc un gat: Miauuuuuuuuuu\n";

//per capturar la sortida del Gos
$this->expectOutputString($expectedGos);
// Metode gos
$this->gos->makeSound();

//per capturar la sortida del Gat
$this->expectOutputString($expectedGat);
// Metode gat
$this->gat->makeSound();

}

}

?>