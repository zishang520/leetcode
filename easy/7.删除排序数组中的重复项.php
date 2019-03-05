<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        /* 函数 */
        // return count($nums = array_unique($nums));
        foreach ($nums as $key => &$value) {
            if (isset($nums[$key + 1])) {
                if($nums[$key + 1] == $value){
                    unset($nums[$key]);
                }
            }
        }
        return count($nums);
    }
}
$nums = [1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 5, 5, 5, 4, 4, 4, 3, 3, 3];
var_dump((new Solution)->removeDuplicates($nums));
var_dump(json_encode(array_values($nums)));
