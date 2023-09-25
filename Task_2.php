<?php

$numbers = range(1, 10);
function removeEvenNum($numbers) {
    $oddNumbers = array_filter($numbers, function($number) {
        return $number % 2 !== 0;
    });
    
    print_r($oddNumbers);
}

removeEvenNum($numbers);

// output
// Array ( [0] => 1 [2] => 3 [4] => 5 [6] => 7 [8] => 9 )