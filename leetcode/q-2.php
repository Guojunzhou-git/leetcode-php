<?php
class ListNode{
    public $val = 0;
    public $next = null;
    public function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $head = null;
        $tail = null;
        $jw = false;
        while (true) {
            if($l1 == null && $l2 == null && $jw == false){
                break;
            }
            $value = 0;
            if($l1 != null){
                $value += $l1->val;
                $l1 = $l1->next;
            }
            if($l2 != null){
                $value += $l2->val;
                $l2 = $l2->next;
            }
            if($jw){
                $value += 1;
            }
            if($value >= 10){
                $jw = true;
                $value = $value % 10;
            }else{
                $jw = false;
            }
            $node = new ListNode($value);
            if($head == null){
                $head = $node;
            }
            $tail->next = $node;
            $tail = $tail->next;
        }
        return $head;
    }
}

$n1_1 = new ListNode(3);
$n1_2 = new ListNode(2);
$n1_3 = new ListNode(1);
$n1_2->next = $n1_3;
$n1_1->next = $n1_2;

$n2_1 = new ListNode(3);
$n2_2 = new ListNode(2);
$n2_3 = new ListNode(1);
$n2_2->next = $n2_3;
$n2_1->next = $n2_2;

$s = new Solution();
$res = $s->addTwoNumbers($n1_1, $n2_1);
print_r($res);