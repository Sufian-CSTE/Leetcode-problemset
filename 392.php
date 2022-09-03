<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function isSubsequence($s, $t) {
        $i = 0;
        $j = 0;
        
        while ($i < strlen($s) && $j < strlen($t)) {
            if ($s[$i] == $t[$j]) {
                $i += 1;
            }
            $j += 1;
        }
        
        if($i == strlen($s)) {
            print_r("{$s} is a subsequence of {$t}");
            return true;
        } else {
            print_r("{$s} is not a subsequence of {$t}");
            return false;
        }
            
    }
}

$s = "abcd";
$t = "ahbgdc";

$new = new Solution;
$new->isSubsequence($s, $t);