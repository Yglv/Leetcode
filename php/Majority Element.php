<?php

class Solution {

  /**
   * @param int[] $nums
   * @return int
   */
  function majorityElement(array $nums):int {
      sort($nums);
      $n = count($nums);
      return $nums[$n / 2];
  }
}