<?php

/**
 * Class Solution
执行用时 : 568 ms, 在所有 php 提交中击败了 46.69% 的用户
内存消耗 : 15.1 MB, 在所有 php 提交中击败了 33.33% 的用户
 *
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $slen = strlen($s);
        $max_palindrome = '';
        for($i=0; $i<$slen; $i++){
            $palindrome = $s[$i];
            $r = 1;
            while(true){
                $ileft = $i - $r;
                $iright = $i + $r;
                if($ileft < 0 || $iright >= $slen){
                    break;
                }else{
                    if($s[$ileft] == $s[$iright]){
                        $palindrome = $s[$ileft].$palindrome.$s[$iright];
                        $r++;
                    }else{
                        break;
                    }
                }
            }
            if(strlen($palindrome) >= strlen($max_palindrome)){
                $max_palindrome = $palindrome;
            }
        }
        for($i=0.5; $i<$slen; $i++){
            $palindrome = '';
            $r = 0;
            while(true){
                $ileft = intval($i) - $r;
                $iright = intval($i) + 1 + $r;
                if($ileft < 0 || $iright >= $slen){
                    break;
                }else{
                    if($s[$ileft] == $s[$iright]){
                        $palindrome = $s[$ileft].$palindrome.$s[$iright];
                        $r++;
                    }else{
                        break;
                    }
                }
            }
            if(strlen($palindrome) >= strlen($max_palindrome)){
                $max_palindrome = $palindrome;
            }
        }
        return $max_palindrome;
    }
}

$s = new Solution();
var_dump($s->longestPalindrome('aaaddaaa'));