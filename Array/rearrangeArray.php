<?php
function rearrangeArray($nums) {
    $s = count($nums);
    $arr = array();

    $p = 1;
    $n = 0;

    for ($i = 0; $i < $s; $i++) {
        if ($nums[$i] > 0) {
            $arr[$p] = $nums[$i];
            $p += 2;    
        } else if ($nums[$i] < 0) {
            $arr[$n] = $nums[$i];
            $n += 2;  
        }
    }
    return $arr;
}

// Test the function
$input = [3,1,-2,-5,2,-4];
$expectedOutput = [3,-2,1,-5,2,-4];
$output = rearrangeArray($input);

// Check if the output matches the expected output
if ($output === $expectedOutput) {
    echo "Test passed!";
} else {
    echo "Test failed!";
}

print_r($expectedOutput);
echo "Actual: ";
print_r($output);
?>
