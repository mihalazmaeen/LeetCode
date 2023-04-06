<?php
/* The isBadVersion API is defined in the parent class VersionControl.
public function isBadVersion($version){} */

class Solution extends VersionControl
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n)
    {
        $bottom = 1;
        $top = $n;
        while ($bottom <= $top) {
            $mid = round($bottom + ($top - $bottom) / 2);
            if ($this->isBadVersion($mid)) {
                $top = $mid - 1;
            } else {
                $bottom = $mid + 1;
            }
        }
        return $bottom;

    }
}