<?php 

include 'numberChecker.php';

use PHPUnit\Framework\TestCase;

final class numberCheckerTest extends TestCase{

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


    // Tests will go here



}
?>