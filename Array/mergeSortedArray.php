<?php

function merge(&$nums1, $m, $nums2, $n)
{
    $i = $m - 1;
    $j = $n - 1;
    $k = $m + $n - 1;

    while ($i >= 0 && $j >= 0) {
        if ($nums1[$i] > $nums2[$j]) {
            $nums1[$k] = $nums1[$i];
            --$i;
        } else {
            $nums1[$k] = $nums2[$j];
            --$j;
        }
        --$k;
    }

    while ($j >= 0) {
        $nums1[$k] = $nums2[$j];
        --$j;
        --$k;
    }
}

//       Explanation:

// Initialize three pointers, $i, $j, and $k. $i points to the last element in $nums1 that should be merged, $j points to the last element in $nums2, and $k points to the last element in the merged array.

// Compare the elements at $nums1[$i] and $nums2[$j]. If $nums1[$i] is greater, then move it to $nums1[$k]. Otherwise, move $nums2[$j] to $nums1[$k]. Decrement the respective pointers and $k.

// Repeat the previous step until either $i or $j becomes negative.

// If there are still elements left in $nums2, then copy them to $nums1, starting from the $k-th position.

// Note that in PHP, we use the & symbol before the $nums1 parameter to pass it by reference, which allows us to modify the array in-place.
//
