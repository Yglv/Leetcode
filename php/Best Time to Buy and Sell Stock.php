<?php

class Solution {

  /**
  * @param int[] $nums
  * @return int
  */
   function maxProfit(array $prices):int {
       $maxProfit = 0;
       $minPrice = $prices[0];
       foreach ($prices as $price){
           $minPrice = min($minPrice, $price);
           $maxProfit = max($maxProfit, $price - $minPrice);
       }
       return $maxProfit;
   }
}