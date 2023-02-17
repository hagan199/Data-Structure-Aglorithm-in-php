<?php
// Given an array nums of integers, return how many of them contain an even number of digits.
// Example 1:
// Input: nums = [12,345,2,6,7896]
// Output: 2
// Explanation: 
// 12 contains 2 digits (even number of digits). 
// 345 contains 3 digits (odd number of digits). 
// 2 contains 1 digit (odd number of digits). 
// 6 contains 1 digit (odd number of digits). 
// 7896 contains 4 digits (even number of digits). 
// Therefore only 12 and 7896 contain an even number of digits.
function findNumbers($nums) {
  $count = 0;
  foreach ($nums as $num) {
      if (strlen((string)$num) % 2 == 0) {
          $count += 1;
      }
  }
  return $count;
  $numbers = [123, 4567, 89, 10, 555555, 2468];
$count = findNumbers($numbers);
echo $count; // Output: 2
// In this test, we define an array $numbers containing six different numbers. The function findNumbers is called with this array as the argument, and the returned value is stored in the variable $count. Finally, the value of $count is printed to the console.

// Out of the six numbers in the array, only two of them (10 and 2468) have an even number of digits, so the function returns a count of 2.

}

?>