<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $length = count($nums);
        $left = 0;
        $right = $length - 1;
        while ($left <= $right) {
            $mid = round($left + round(($right - $left) / 2));
            if ($nums[$mid] == $target) {
                return $mid;
            } else
                if ($nums[$mid] > $target) {
                    $right = $mid - 1;
                } else if ($nums[$mid] < $target) {
                    $left = $mid + 1;
                }
        }
        return -1;
    }
}