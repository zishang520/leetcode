<?php
class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x)
    {
        return ($x == strrev((string) $x));
    }
}
var_dump((new Solution)->isPalindrome(0));
