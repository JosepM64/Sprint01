<?php
// Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar que el codi font de la classe fa el que ha de fer.

// aquest és l'arixiu que volem provar
include 'src/numberChecker.php';
// importació del PHPUNit
use PHPUnit\Framework\TestCase;
// definim la classe de proves
final class numberCheckerTest extends TestCase {

    // creem una funció per provar si es parell o possitiu
    public function testIsEvenAndPositive() {

        $num1 = 8;
        $num2 = 9;
        $num3 = -10;
        $num4 = -11;
        $num5 = "12";

        //instanciem les variables
        $numCheck1 = new NumberChecker($num1);
        $numCheck2 = new NumberChecker($num2);
        $numCheck3 = new NumberChecker($num3);
        $numCheck4 = new NumberChecker($num4);
        $numCheck5 = new NumberChecker($num5);
        
        // Test per imparell isEven()
        $result1 = $numCheck1->isEven();
        $result2 = $numCheck2->isEven();
        $result3 = $numCheck3->isEven();
        $result4 = $numCheck4->isEven();
        $result5 = $numCheck5->isEven();

        //Asserts per imparell
        $this->assertTrue($result1, "$num1 és par");
        $this->assertFalse($result2, "$num2 és impar");
        $this->assertTrue($result3, "$num3 és par");
        $this->assertFalse($result4, "$num4 és impar");
        $this->assertTrue($result5, "$num5 és par");

        // Test per possitiu isPositive()
        $result6 = $numCheck1->isPositive();
        $result7 = $numCheck2->isPositive();
        $result8 = $numCheck3->isPositive();
        $result9 = $numCheck4->isPositive();
        $result10 = $numCheck5->isPositive();

        //Aserts es possitiu
        $this->assertTrue($result6, "$num1 és positiu");
        $this->assertTrue($result7, "$num2 és positiu");
        $this->assertFalse($result8, "$num3 és negatiu");
        $this->assertFalse($result9, "$num4 és negatiu");
        $this->assertTrue($result10, "$num5 és positiu");


    }
}

?>