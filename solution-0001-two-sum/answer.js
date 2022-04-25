// https://leetcode.com/problems/two-sum/
//
// Given an array of integers nums and an integer target,
// return indices of the two numbers such that they add up to the target.
//
// You may assume that each input would have exactly one solution,
// and you may not use the same element twice.
//
// You can return the answer in any order.

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function (nums, target) {
  while (nums.length > 1) {
    // get the last value from the array
    // pop - https://www.w3schools.com/jsref/jsref_pop.asp
    let last_value = nums.pop();
    // subtract the last value from the target value
    let find_value = target - last_value;
    // find the potential index of that value
    // https://www.w3schools.com/jsref/jsref_findindex.asp
    let index_b = nums.findIndex(valueEquals);
    function valueEquals(x) {
      return x == find_value;
    }
    if (index_b !== undefined && index_b > -1) {
      return [index_b, nums.length];
    }
  }
  return null;
};
