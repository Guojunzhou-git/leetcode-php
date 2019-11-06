<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    //执行用时 : 4 ms, 在所有 php 提交中击败了 98.87% 的用户
    //内存消耗 : 14.9 MB, 在所有 php 提交中击败了 9.90% 的用户
    function mergeTwoLists1($l1, $l2) {
        if($l1 == null){
            return $l2;
        }
        if($l2 == null){
            return $l1;
        }
        if($l1->val < $l2->val){
            $l1->next = $this->mergeTwoLists1($l1->next, $l2);
            return $l1;
        }else{
            $l2->next = $this->mergeTwoLists1($l2->next, $l1);
            return $l2;
        }
    }

    //执行用时 : 8 ms, 在所有 php 提交中击败了 86.84% 的用户
    //内存消耗 : 14.7 MB, 在所有 php 提交中击败了 59.41% 的用户
    function mergeTwoLists2($l1, $l2){
        $node = new ListNode(-1);
        $head = $node;
        while($l1 != null && $l2 != null){
            if($l1->val < $l2->val){
                $node->next = $l1;
                $l1 = $l1->next;
            }else{
                $node->next = $l2;
                $l2 = $l2->next;
            }
            $node = $node->next;
        }
        if($l1 != null){
            $node->next = $l1;
        }
        if($l2 != null){
            $node->next = $l2;
        }
        return $head->next;
    }
}

$l1n1 = new ListNode(1);
$l1n2 = new ListNode(3);
$l1n3 = new ListNode(5);
$l1n4 = new ListNode(7);
$l1n5 = new ListNode(9);
$l1n1->next = $l1n2;
$l1n2->next = $l1n3;
$l1n3->next = $l1n4;
$l1n4->next = $l1n5;

$l2n1 = new ListNode(2);
$l2n2 = new ListNode(4);
$l2n3 = new ListNode(6);
$l2n4 = new ListNode(8);
$l2n5 = new ListNode(10);
$l2n1->next = $l2n2;
$l2n2->next = $l2n3;
$l2n3->next = $l2n4;
$l2n4->next = $l2n5;

echolist($l1n1);
echolist($l2n1);
$s = new Solution();
//$l3n1 = $s->mergeTwoLists1($l1n1, $l2n1);
//echolist($l3n1);
$l4n1 = $s->mergeTwoLists2($l1n1, $l2n1);
echolist($l4n1);

function echolist($head){
    $data = array();
    while($head != null){
        array_push($data, $head->val);
        $head = $head->next;
    }
    print_r($data);
}