<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $total = array_sum($nums);
        $leftSum = 0;
        for ($i=0; $i < count($nums); $i++) { 
            $rightSum = $total - $nums[$i] - $leftSum;
            if ($leftSum == $rightSum) {
                print_r($i);
                return $i;
            }
            $leftSum += $nums[$i];
        }
        print_r("there is no privot Index.");
        return -1;
    }
}

$nums = [1,7,3,6,5,6];

$new = new Solution;
$new->pivotIndex($nums);