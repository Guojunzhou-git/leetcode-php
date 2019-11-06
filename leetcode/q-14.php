<?php
//执行用时 : 12 ms, 在所有 php 提交中击败了 53.35% 的用户
//内存消耗 : 15.2 MB, 在所有 php 提交中击败了 5.71% 的用户
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';
        if(count($strs) == 0){
            return '';
        }
        $p = 0;
        while(true){
            if(!isset($strs[0][$p])){
                break;
            }
            $ch = $strs[0][$p];
            $ch_comment = true;
            for($i=1; $i<count($strs); $i++){
                if(!isset($strs[$i][$p])){
                    $ch_comment = false;
                    break;
                }
                if($strs[$i][$p] != $ch){
                    $ch_comment = false;
                    break;
                }
            }
            if($ch_comment){
                $prefix = $prefix . $ch;
                $p++;
            }else{
                break;
            }
        }
        return $prefix;
    }
}
$s = new Solution();
var_dump($s->longestCommonPrefix(['aaa', 'aa', 'ab']));