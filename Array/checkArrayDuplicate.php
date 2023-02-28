<?php


function checkIfExist($arr) {
    $hashTable = [];
    for ($i = 0; $i < count($arr); $i++) {
        if (isset($hashTable[$arr[$i] * 2]) || ($arr[$i] % 2 == 0 && isset($hashTable[$arr[$i] / 2]))) {
            // Found a pair, return true
            return true;
        }
        // Add current number to the hash table
        $hashTable[$arr[$i]] = true;
    }
    // No pair found
    return false;
}

// The function first initializes an empty hash table. It then iterates over the elements of the array and checks if the double of the current element is already in the hash table. If it is, then it means we have found a pair of elements that satisfy the condition in the problem statement. If not, we check if the current element is even and its half is already in the hash table. If it is, then we have found another pair that satisfies the condition. In either case, we return true. If we iterate over the entire array and do not find any such pair, we return false.

// Note that the time complexity of the above approach is O(n), where n is the length of the array, and the space complexity is also O(n) to store the hash table.
// 
?>