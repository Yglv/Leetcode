<?php

class Solution {

  /**
   * @param int[] $nums
   * @param int $val
   * @return int
   */
  function removeElement(array &$nums,int $val):int {
      $res = 0;
      $nums = array_diff($nums, [$val]);
      sort($nums);
      $res = count($nums);
      return $res;
  }
}