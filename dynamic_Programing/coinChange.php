<?php

function coinChange($coins, $amount) {
  $cache = array_fill(0, $amount + 1, $amount + 1); // initialize cache array with maximum possible values
  $cache[0] = 0; // base case: it takes zero coins to make zero change

  foreach ($coins as $coin) { // for each type of coin
      for ($i = $coin; $i <= $amount; $i++) { // for each amount from the coin value up to the target amount
          $cache[$i] = min($cache[$i], $cache[$i - $coin] + 1); // update the minimum number of coins needed
      }
  }

  return $cache[$amount] > $amount ? -1 : $cache[$amount]; // return -1 if no solution exists, otherwise return the minimum number of coins
}
 
?>