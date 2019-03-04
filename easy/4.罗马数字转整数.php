<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $map = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        $num = 0;
        foreach (($_tmp_s = str_split($s)) as $key => &$value) {
            if (array_key_exists($_tmp_key = $key + 1, $_tmp_s) && ($map[$_tmp_s[$_tmp_key]] > $map[$value])) {
                continue;
            } else if (array_key_exists($_tmp_key1 = $key - 1, $_tmp_s) && ($map[$_tmp_s[$_tmp_key1]] < $map[$value])) {
                $num += $map[$value] - $map[$_tmp_s[$_tmp_key1]];
            } else {
                $num += $map[$value];
            }
        }
        return $num;
    }
}
var_dump((new Solution)->romanToInt('IX'));
var_dump((new Solution)->romanToInt('LVIII'));
var_dump((new Solution)->romanToInt('MCMXCIV'));
