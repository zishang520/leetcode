<?php
class Solution
{

    const INT_MIN = -0x80000000;

    const INT_MAX = 0x7fffffff;

    /**
     * @param Integer $x
     * @return Integer
     */
    public function reverse($x)
    {
        // $_tmp_x = (int) strrev((string) $x);
        // $_tmp_x = $_tmp_x > self::INT_MAX || $_tmp_x < self::INT_MIN ? 0 : $_tmp_x;
        // return $x > 0 ? $_tmp_x : -$_tmp_x;
        $rev = 0;
        while ($x != 0) {
            $_pop = (int) ($x % 10);
            $x = (int) ($x / 10);
            if (($rev > self::INT_MAX / 10 || ($rev == self::INT_MAX / 10 && $_pop > 7)) || ($rev < self::INT_MIN / 10 || ($rev == self::INT_MIN / 10 && $_pop < -8))) {
                return 0;
            }
            $rev = $rev * 10 + $_pop;
        }
        return $rev;
    }
}

var_dump((new Solution)->reverse(1534236469));
