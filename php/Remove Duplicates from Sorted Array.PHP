<?php

class Solution {

  /**
   * @param int[] $nums
   * @return int
   */
  function removeDuplicates(array &$nums):int {
      $nums = array_unique($nums);
      $res = count($nums);
      return $res;
  }
}