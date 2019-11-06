<?php
//执行用时 : 4 ms, 在所有 php 提交中击败了 95.79% 的用户
//内存消耗 : 15 MB, 在所有 php 提交中击败了 42.68% 的用户
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $valid = true;
        $stack = array();
        for($i=0; $i<strlen($s); $i++){
            $ch = $s[$i];
            if(in_array($ch, ['(', '{', '['])){
                array_push($stack, $ch);
            }else{
                $sch = array_pop($stack);
                if(
                    ($ch == ')' && $sch == '(') or
                    ($ch == ']' && $sch == '[') or
                    ($ch == '}' && $sch == '{')
                ){
                    continue;
                }else{
                    $valid = false;
                    break;
                }
            }
        }
        return $valid && count($stack) == 0;
    }
}
$s = new Solution();
var_dump($s->isValid('((())){}[]'));