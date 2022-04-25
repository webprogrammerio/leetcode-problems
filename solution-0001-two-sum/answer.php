<?php

// https://leetcode.com/problems/two-sum/
//
// Given an array of integers nums and an integer target,
// return indices of the two numbers such that they add up to the target.
//
// You may assume that each input would have exactly one solution,
// and you may not use the same element twice.
//
// You can return the answer in any order.

class Solution
{
  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum(array $nums, int $target)
  {
    // my solution
    while (count($nums) > 1) {
      // array_pop() https://www.php.net/manual/en/function.array-pop.php
      $needle = intval($target) - intval(array_pop($nums));
      // array_search() https://www.php.net/manual/en/function.array-search.php
      $index_b = array_search($needle, array_values($nums));
      if ($index_b !== false) {
        return [$index_b, count($nums)];
      }
    }
    return null;

    // alternate solution from:
    // https://leetcode.com/problems/two-sum/solution/200955
    // hash table algorithm
    // - add values to another array
    // - and compare along the way
    // $compare = [];
    // for($i=0; $i < count($nums); $i++){
    // 	$num_value = $nums[$i];
    //     $compare_index = $compare[$num_value] ?? -1;
    // 	if($compare_index >= 0){
    //         return [ $compare[$num_value] , $i];
    //     }
    //     $compare[ $target - $num_value ] = $i;
    // }
    // return null;
  }
}
