
<?php
//   You are given an m x n integer grid accounts where accounts[i][j] is the amount of money the i​​​​​​​​​​​th​​​​ customer has in the j​​​​​​​​​​​th​​​​ bank. Return the wealth that the richest customer has.

// A customer's wealth is the amount of money they have in all their bank accounts. The richest customer is the customer that has the maximum wealth.

// Example 1:

// Input: accounts = [[1,2,3],[3,2,1]]
// Output: 6
// Explanation:
// 1st customer has wealth = 1 + 2 + 3 = 6
// 2nd customer has wealth = 3 + 2 + 1 = 6
// Both customers are considered the richest with a wealth of 6 each, so return 6.
  // integer && range
  // 1

function maximumWealth($accounts)
{
    $maxWealthSoFar = 0;
    foreach ($accounts as $customer) {
        $currentCustomerwealth = 0;
        foreach ($customer as $bank) {
            // This adds the value of the current element to the "currentCustomerwealth" variable.
            $currentCustomerwealth += $bank;
            //   var_dump($currentCustomerwealth). '<br>';
        }
        // This sets the value of "maxWealthSoFar" to the maximum of its current value and the value of "currentCustomerwealth".
        $maxWealthSoFar = max($maxWealthSoFar, $currentCustomerwealth);
    }

    return $maxWealthSoFar;
}

// Test the maximumWealth function with a sample input
$accounts = [
  [1, 2, 3],
  [3, 2, 1],
  [5, 6, 7],
];
// This initializes a variable called "accounts" to a sample input array.

$maxWealth = maximumWealth($accounts);
// This calls the "maximumWealth" function with the "accounts" array as input and stores the result in a variable called "maxWealth".

echo 'Maximum wealth: '.$maxWealth."\n";
// This prints the string "Maximum wealth: " followed by the value of "maxWealth" and a newline character to the console.

?>
?>

