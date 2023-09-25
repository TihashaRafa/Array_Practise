<?php

$grades = array(85, 92, 78, 88, 95);

function sortGrade($grades) {
    rsort($grades);
    print_r($grades);
}

sortGrade($grades);


// output
// Array
// (
//     [0] => 95
//     [1] => 92
//     [2] => 88
//     [3] => 85
//     [4] => 78
// )