<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $solution = [];

        for($i=0; $i < sizeof($nums); $i++) {
          array_push($solution, $nums[$nums[$i]]);
        }

        return $solution;
    }
}
