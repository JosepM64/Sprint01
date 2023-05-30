<?php 

// proves que faig jo , no és exercici!!!

$companies = ['facebook', 'twitter', 'google', 'apple'];
$colors = [['green', 'blue'], ['red', 'yellow'], 'black'];
$countries = [
    'USA' => 'United States',
    'CAN' => 'Canada',
    'MEX' => 'Mexico',
    'BRA' => 'Brazil',
    'ARG' => 'Argentina',
    'USA2' => 'United States',
];

if (in_array('facebook', $companies)) {
    echo 'Trobat';

}else {

    echo 'No trobat';
}

$codes = array_keys($countries);
// print_r($codes);
// var_dump($countries);

// print_r(array_count_values($countries));
// print_r(array_diff($countries,$companies));

$testArray = [1,2,3];
$result = array_map(fn($element) => $element * 2, $testArray);
print_r($result);

?>