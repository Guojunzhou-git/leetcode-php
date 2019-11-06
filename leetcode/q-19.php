<?php
//执行用时 : 8 ms, 在所有 php 提交中击败了 78.48% 的用户
//内存消耗 : 14.9 MB, 在所有 php 提交中击败了 12.73% 的用户
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $l = $r = $head;
        $remove_head = false;
        for($i=0; $i<=$n; $i++){
            if($r != null){
                $r = $r->next;
            }else{
                $remove_head = true;
            }
        }
        while($r != null){
            $l = $l->next;
            $r = $r->next;
        }
        if($remove_head){
            return $head->next;
        }else{
            $remove = $l->next;
            $l->next = $remove->next;
            return $head;
        }
    }
}
$head = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);
$node6 = new ListNode(6);
$node7 = new ListNode(7);
$node6->next = $node7;
$node5->next = $node6;
$node4->next = $node5;
$node3->next = $node4;
//$node2->next = $node3;
$head->next = $node2;

echolist($head);
$s = new Solution();
$head_removed = $s->removeNthFromEnd($head, 7);
echolist($head_removed);

function echolist($head){
    $data = array();
    while($head != null){
        array_push($data, $head->val);
        $head = $head->next;
    }
    print_r($data);
}