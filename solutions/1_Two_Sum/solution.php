<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
      $hash = [];

      foreach($nums as $key => $num) {
        $potentialMatch = $target - $num;
        if (array_key_exists($potentialMatch, $hash)) {
          return [$hash[$potentialMatch], $key];
        } else {
          $hash[$num] = $key;
        }
      }

      return [];
    }
}
