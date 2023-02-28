<?php
class Solution {

  /**
   * @param Integer[] $prices
   * @return Integer
   */
function maxProfit($prices) {
      $maxProfit = 0;
      $cheapestPrice = $prices[0];

      for($i = 0; $i < count($prices); $i++){
          $price = $prices[$i];
          if($price < $cheapestPrice){
              $cheapestPrice = $price;
          }
          $currentProfit = $price - $cheapestPrice;
          $maxProfit = max($currentProfit, $maxProfit);
      }
      return $maxProfit;
  }

}
?>