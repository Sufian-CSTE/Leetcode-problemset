<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function isIsomorphic($s, $t) {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $s_array = [];
        $t_array = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $s_iterate = $s[$i];
            $t_iterate = $t[$i];
            if (!$s_array[$s_iterate] && !$t_array[$t_iterate]) {
                $s_array[$s_iterate] = $t_iterate;
                $t_array[$t_iterate] = $s_iterate;
            } else {
                if ($s_array[$s_iterate] != $t_iterate || $t_array[$t_iterate] != $s_iterate)
                    return false;
            }
        }
        return true;
    }
}

$s = "egg";
$t = "add";

$new = new Solution;
$new->isIsomorphic($s, $t);