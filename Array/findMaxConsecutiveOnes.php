<!-- Given a binary array nums, return the maximum number of consecutive 1's in the array.

  -->
<?php
function findMaxConsecutiveOnes($nums) {
  $count = 0;
  $result = 0;
  $length = count($nums); // add this line to get the length of the array
  for ($i = 0; $i < $length; $i++) { // change $nums to $length
      if ($nums[$i] == 0) { // change false to 0
          $count = 0;
      } else {
          $count++;
          $result = max($count, $result);
      }
  }
  return $result;
}
?>