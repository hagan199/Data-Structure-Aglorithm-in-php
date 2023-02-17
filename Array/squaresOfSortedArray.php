<?php
//Given an integer array nums sorted in non-decreasing order, return an array of the squares of each number sorted in non-decreasing order.

 
    function sortedSquares($nums) {
      $output = array();
      foreach($nums as $n) {
        $output[] = pow($n, 2);
        //pow(mixed $num, mixed $exponent): int|float|object
      }
      sort($output);
      return $output;
  }

    $arrayOfNumbers = [-7,-3,2,3,11];
   // echo "sortedSquares " . count($arrayOfNumbers) . "\n";
print_r( sortedSquares($arrayOfNumbers) );

// Follow up: Squaring each element and sorting the new array is very trivial, could you find an O(n) solution using a different approach?
?>