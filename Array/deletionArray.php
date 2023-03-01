<?php
// Declare an integer array of 10 elements.
$intArray = array_fill(0, 10, 0);

// The array currently contains 0 elements
$length = 7;

//Add elements at the first 6 indexes of the Array.
for($i = 0; $i < 6; $i++) {
    $intArray[$length] = $i;
    $length++;
}



// Print the contents of the array
print_r($intArray);
?>