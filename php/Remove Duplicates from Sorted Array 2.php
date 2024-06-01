<?php

class Solution {

  /**
   * @param int[] $nums
   * @return int
   */
  function removeDuplicates(array &$nums): int {
      $result = 2;
      $count = count($nums);
      for ($i = 1; $i < $count - 1; $i++){
          if ($nums[$i] === $nums[$i - 1] && $nums[$i] === $nums[$i + 1]){
              unset($nums[$i - 1]);
          }
          else {
              $result++;
          }
      }
      return $result;
  }
}