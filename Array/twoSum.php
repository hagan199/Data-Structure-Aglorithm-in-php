<?php

function twoSum($nums, $target) {
  $numVisited = [];
  $result = array();

  for ($i = 0 ; $i < count($nums); $i++) {
      $num = $nums[$i];
      $complement = $target - $num;

      if (isset($numVisited[$complement])) {
          $result = array($numVisited[$complement], $i);
          break;
      }
      $numVisited[$num] = $i;
  }
  return $result;
}

// Testing
$nums = array(2, 7, 11, 15);
$target = 9;
$result = twoSum($nums, $target);
assert($result == array(0, 1), "Test Case 1 Failed");

$nums = array(3, 2, 4);
$target = 6;
$result = twoSum($nums, $target);
assert($result == array(1, 2), "Test Case 2 Failed");

$nums = array(3, 3);
$target = 6;
$result = twoSum($nums, $target);
assert($result == array(0, 1), "Test Case 3 Failed");

echo "All test cases passed.";


// The twoSum function takes two arguments - an array of numbers $nums and a target value $target. It then uses a for loop to iterate through the array and for each element, calculates its complement (the value that needs to be added to it to get the target value).

// For each element, it checks if its complement has already been visited (i.e., exists in the $numVisited array). If it has, that means the current element and its complement add up to the target value, so it returns the indices of those two elements as an array.

// If the complement has not been visited yet, it adds the current element to the $numVisited array with its index as the value.

// The function returns the resulting array of indices if it finds a match, or an empty array if no matching pair is found.

// To test the function, we create three different test cases with different inputs and expected outputs, and use the assert function to check if the actual output of the function matches the expected output for each test case. If any of the test cases fail, an error message will be displayed. If all test cases pass, a success message will be displayed.




?>

<!-- Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2] -->