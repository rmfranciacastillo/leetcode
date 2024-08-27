<?php 

class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
      $solution = 0;

      foreach($operations as $operation) {
        switch($operation) {
          case '--X':
          case 'X--':
            $solution -= 1;
            break;
          case '++X':
          case 'X++':
            $solution += 1;
        }
      }

      return $solution;
    }
}
