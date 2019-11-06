<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     * 832 ms	14.9 MB
     */
    function lengthOfLongestSubstring($s) {
        $slen = strlen($s);
        $max_sub_len = 0;
        for($i=0; $i<$slen; $i++){
            $sub = array();
            $offset = 0;
            while(true){
                if($i+$offset >= $slen || in_array($s[$i+$offset], $sub)){
                    break;
                }else{
                    array_push($sub, $s[$i+$offset]);
                    $offset++;
                }
            }
            if(count($sub) > $max_sub_len){
                $max_sub_len = count($sub);
            }
        }
        return $max_sub_len;
    }
}

$s = new Solution();
$s->lengthOfLongestSubstring('asdfggggqwerqrryuiohkjl');