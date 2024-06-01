<?php

class Solution {

  /**
   * @param int[] $nums1
   * @param int $m
   * @param int[] $nums2
   * @param int $n
   * @return null
   */
  function merge(array &$nums1,int $m,array $nums2,int $n):void {
      for ($i = $m; $i < $n + $m; $i++){
          $nums1[$i] = $nums2[$i - $m];
      }
      sort($nums1);
  }
}


