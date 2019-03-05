<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        /* 函数 */
        // return count($nums = array_filter($nums, function ($value) use (&$val) {
        //     return ($value != $val);
        // }));
        foreach ($nums as $key => &$value) {
            if ($value == $val) {
                unset($nums[$key]);
            }
        }
        return count($nums);
    }
}
$nums = [1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 5, 5, 5, 4, 4, 4, 3, 3, 3];
var_dump((new Solution)->removeElement($nums, 4));
var_dump(json_encode(array_values($nums)));
