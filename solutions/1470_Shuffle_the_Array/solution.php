<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
      $p1 = 0;
      $p2 = $n;
      $solution = [];

      foreach ($nums as $key => $num) {
        if($key % 2 == 0) {
          array_push($solution, $nums[$p1]);
          $p1 += 1;
        } else {
          array_push($solution, $nums[$p2]);
          $p2 += 1;
        }
      }
      return $solution;
    }
}
