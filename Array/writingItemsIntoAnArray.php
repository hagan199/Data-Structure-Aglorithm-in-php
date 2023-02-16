<!-- Writing Items into an Array
To put a DVD into the Array, we need to decide which of the 15 places we'd like it to go in. Each of the places is identified using a number in the range of 0 to N - 1. The 1st place is 0, the 2nd place is 1, the 3rd place is 2... all the way up to the 15th place, which is 14. We call these numbers that identify each place indexes.

Let's put the DVD for The Avengers into the eighth place of the Array we created above. -->
<?php
$squareNumbers = array(); // create an empty array

// Go through each of the array indexes, from 0 to 9.
for ($i = 0; $i < 10; $i++) {
    // We need to be careful with the 0-indexing. The next square number
    // is given by (i + 1) * (i + 1).
    // Calculate it and insert it into the array at index i.
    $square = ($i + 1) * ($i + 1);
    $squareNumbers[$i] = $square;
}
foreach ($squareNumbers as $square) {
  // Print the current value of square.
  echo $square . "\n";
}
// Test: print out the array to verify that it contains the expected values.
// print_r($squareNumbers);
print_r($squareNumbers);
?>



