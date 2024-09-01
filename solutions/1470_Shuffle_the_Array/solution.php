<?php
/**
 * Solution for 1470
 *
 * @category Class
 * @package  Leetcode
 * @author   Renato Francia <rmfranciacastillo@gmail.com>
 * @license  <http://opensource.org/licenses/gpl-license.php> GNU Public License
 * @link     https://rmfranciacastillo.github.io/
 */
class Solution
{
    /**
     * Returns Shuffled Array
     *
     * @param Integer[] $nums Array of Numbers
     * @param Integer   $n    Middle pointer
     *
     * @return Integer[]
     */
    function shuffle($nums, $n)
    {
        $p1 = 0;
        $p2 = $n;
        $solution = [];

        foreach ($nums as $key => $num) {
            if ($key % 2 == 0) {
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
