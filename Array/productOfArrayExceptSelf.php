<?php
function productExceptSelf($nums) {
    $n = count($nums);
    $rightProduct = array_fill(0, $n, 1);
    $leftProduct = array_fill(0, $n, 1);

    $output = array_fill(0, $n, 1);

    for ($i = 1; $i < $n; $i++) {
        $leftProduct[$i] = $nums[$i - 1] * $leftProduct[$i - 1];
    }

    for ($i = $n - 2; $i >= 0; $i--) {
        $rightProduct[$i] = $nums[$i + 1] * $rightProduct[$i + 1];
    }

    for ($i = 0; $i < $n; $i++) {
        $output[$i] = $leftProduct[$i] * $rightProduct[$i];
    }

    return $output;
}
// example usage:
$nums = [1, 2, 3, 4];
$output = productExceptSelf($nums);
print_r($output);  // output: Array ( [0] => 24 [1] => 12 [2] => 8 [3] => 6 )
?>