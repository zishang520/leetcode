<?php
/**
 * 未完成
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;
    public function __construct($val)
    {
        $this->val = $val;
    }
}
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function mergeTwoLists($l1, $l2)
    {
        if (!($l1 instanceof ListNode) && ($l2 instanceof ListNode)) {
            $l1 = new ListNode(0);
        }
        if (($l1 instanceof ListNode) && !($l2 instanceof ListNode)) {
            $l2 = new ListNode(0);
        }
        if ($l1 instanceof ListNode && $l2 instanceof ListNode) {

        }
        return new ListNode(null);
    }
}
$l1a = new ListNode(-1);
$l1b = new ListNode(5);
$l1c = new ListNode(3);
$l1d = new ListNode(0);
$l1e = new ListNode(0);
$l1d->next = $l1e;
$l1c->next = $l1d;
$l1b->next = $l1c;
$l1a->next = $l1b;
$l1 = $l1a;

$l2a = new ListNode(1);
$l2b = new ListNode(2);
$l2c = new ListNode(4);
$l2b->next = $l2c;
$l2a->next = $l2b;
$l2 = $l2a;
var_dump((new Solution)->mergeTwoLists($l1, $l2));
