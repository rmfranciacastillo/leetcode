<?php 

class Solution {

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
      $solution = [];

      foreach($words as $key =>$word){
        if (str_contains($word,$x)) {
          array_push($solution, $key);
        }
      }

      return $solution;
    }
}
