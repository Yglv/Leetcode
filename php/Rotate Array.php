<?php

class Solution {

  /**
  * @param int[] $nums
  * @param int $k
  */
   function rotate(array &$nums, int $k): void {
       $temp = $nums;
       $count = count($nums);
       for ($i = 0; $i < $count; $i++){
           $temp[($i + $k) % $count] = $nums[$i];
       }
       for ($j = 0; $j < $count; $j++){
           $nums[$j] = $temp[$j];
       }
   }
}