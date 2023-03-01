<?php
// Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The relative order of the elements may be changed.

// Since it is impossible to change the length of the array in some languages, you must instead have the result be placed in the first part of the array nums. More formally, if there are k elements after removing the duplicates, then the first k elements of nums should hold the final result. It does not matter what you leave beyond the first k elements.

// Return k after placing the final result in the first k slots of nums.

// Do not allocate extra space for another array. You must do this by modifying the input array in-place with O(1) extra memory.

// Custom Judge:

// The judge will test your solution with the following code:
function removeElement(&$nums, $val) {
  $countNum = count($nums);

  if($countNum === 0)
      return 0;
  
  $resultSize = 0;
  
  for($i = 0; $i < $countNum; $i++){
      if($nums[$i] != $val){
        $nums[$resultSize]  = $nums[$i];
        $resultSize++;  
      }
  }
  return $resultSize;
}

// Test
$nums = [3,2,2,3];
$val = 3;
$expectedResult = 2;
$actualResult = removeElement($nums, $val);
print_r($resultSize);
if($actualResult === $expectedResult){
  echo "Test passed";
} else {
  echo "Test failed";
}

 ?>