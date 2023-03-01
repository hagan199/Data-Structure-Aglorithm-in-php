<?php

// Declare an integer array of 6 elements
$intArray = [2,3,4,5,62];
$length = 0;

// Add 3 elements to the Array
for ($i = 0; $i < count($intArray); ++$i) {
    $intArray[$length] = 10;
    $length++;
}

// Print the elements of the array
foreach ($intArray as $element) {
    // echo $intArray[$i]. '' .$i;
    print_r($intArray[$i].''.$i);
}
