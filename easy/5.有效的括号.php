<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s)
    {
        if ($s == '') {
            return true;
        }
        $filter = ['(' => ')', ')' => '(', '{' => '}', '}' => '{', '[' => ']', ']' => '['];
        $list = [];
        foreach (str_split($s) as &$value) {
            if (!isset($filter[$value])) {
                return false;
            }
            switch ($value) {
                case '(':
                case '{':
                case '[':
                    array_push($list, $value);
                    break;
                case ')':
                case '}':
                case ']':
                    if ($filter[array_pop($list)] != $value) {
                        return false;
                    }
                    break;
            }
        }
        return empty($list);
    }
}
var_dump((new Solution)->isValid('[[([{}])]]'));
