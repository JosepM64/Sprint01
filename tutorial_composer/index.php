<?php 

require __DIR__ . '/vendor/autoload.php';

$calc = new App\classes\Calc;
echo $calc->sum(5, 4) . PHP_EOL;

?>