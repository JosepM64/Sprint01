<?php 
$companies = ['facebook', 'twitter', 'google', 'apple'];
$colors = [['green', 'blue'], ['red', 'yellow'], 'black'];
$countries = [
    'USA' => 'United States',
    'CAN' => 'Canada',
    'MEX' => 'Mexico',
    'BRA' => 'Brazil',
    'ARG' => 'Argentina'
];

if (in_array('facebook', $companies)) {
    echo 'Trobat';

}else {

    echo 'No trobat';
}

$codes = array_keys($countries);
print_r($codes);
// var_dump($countries);

?>