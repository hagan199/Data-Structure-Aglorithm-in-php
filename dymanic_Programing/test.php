
<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
  // integer && range 
  // 1
  $binary = decbin($N);
  $length = strlen($binary);
  echo $length;
  
  die;
  $hasOne = false;
  $zero = 0;
  $gaps = [];

  for ($i = 0; $i < $length; $i++) {
    if($binary[$i] == 1 ){
      if(!hasOne){
            $hasOne = true;
            continue;
      }

    }
    $zero++;

  }
  die;
    return $binary;
}
//echo  solution(1041);
?>
