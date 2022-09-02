<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        for ($i=1; $i < count($nums); $i++) { 
            $nums[$i] += $nums[$i-1];
        }
        print_r($nums);
    }
}
$nums = [1,2,3,4,5];

$new = new Solution;
$new->runningSum($nums);