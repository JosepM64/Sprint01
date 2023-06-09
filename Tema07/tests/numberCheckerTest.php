<?php 
// aquest és l'arixiu que volem provar
include 'numberChecker.php';
// importació del PHPUNit
use PHPUnit\Framework\TestCase;
// definim la classe de proves
final class numberCheckerTest extends TestCase {

    // creem una funcio per provar si es parell o possitiu
    public function testIsEvenAndPositive() {

        $num1 = 8;
        $num2 = 9;
        $num3 = -10;
        $num4 = -11;
        $num5 = "12";

        //instanciem les variables
        $numCheck1 = new NumCheck($num1);
        $numCheck2 = new NumCheck($num2);
        $numCheck3 = new NumCheck($num3);
        $numCheck4 = new NumCheck($num4);
        $numCheck5 = new NumCheck($num5);       
        
        $result1 = $numberCheck1->isEven();
        $result2 = $numberCheck2->isEven();
        $result3 = $numberCheck3->isEven();
        $result4 = $numberCheck4->isEven();
        $result5 = $numberCheck5->isEven();

        $this->assertTrue($result1, "par");
        $this->assertTrue($result2, "impar");
        $this->assertTrue($result3, "par");



        /*
        $num1 =new numberCheckerTest (20);
        $num2 =new numberCheckerTest (-31);


        $this->assertIsBool ($num1->isEven());
        $this->assertIsBool ($num1->isPositive());
        $this->assertIsBool ($num2->isEven());
        $this->assertIsBool ($num2->isPositive());

        $this->assertIsFalse ($num1->isEven());
        $this->assertIsTrue ($num1->isEven());

        $this->assertIsFalse ($num2->isEven());
        $this->assertIsTrue ($num2->isEven());
*/

    }
}

?>