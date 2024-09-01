<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
      $keys = [];
      $solution = 0;

      // Get number of values
      foreach ($nums as $num) {
        if (is_null($keys[$num])) {
          $keys[$num] = 1;
        } else {
          $keys[$num] += 1;
        }
      }

      // Using Hint #1:
      // Count how many times each number
      // appears. If a number appears n times,
      // then n * (n – 1) // 2 good pairs can be made with
      // this number.
      foreach ($keys as $key => $num) {
        $solution += floor(($num * ($num - 1)) / 2);
      }

      return $solution;
    }
}
