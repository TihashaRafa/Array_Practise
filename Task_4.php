<?php

$studentGrades = array(
    "Tiasha" => array("Math" => 85, "English" => 88, "Science" => 90),
    "Rafa" => array("Math" => 78, "English" => 84, "Science" => 89),
    "Jarin" => array("Math" => 92, "English" => 95, "Science" => 88)
);

function calAndAvgGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $numSubjects = count($grades);
        $averageGrade = $totalGrades / $numSubjects;
        echo "$student's average grade: " . round($averageGrade, 2) . PHP_EOL;
    }
}

calAndAvgGrades($studentGrades);


// output
// Tiasha's average grade: 87.67 
// Rafa's average grade: 83.67 
// Jarin's average grade: 91.67
