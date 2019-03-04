<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        $_tmp_nums = array_flip($nums);
        foreach ($nums as $key => &$value) {
            if (array_key_exists($_tmp = ($target - $value), $_tmp_nums) && ($_key1 = $_tmp_nums[$_tmp]) != $key) {
                return [$key, $_key1];
            }
        }
        return [];
    }
}
var_dump((new Solution)->twoSum([3,2,3], 6));
