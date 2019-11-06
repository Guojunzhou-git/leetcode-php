<?php
//执行用时 : 12 ms, 在所有 php 提交中击败了 50.07% 的用户
//内存消耗 : 14.9 MB, 在所有 php 提交中击败了 5.19% 的用户
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $lt0 = $x < 0 ? true : false;
        $x = abs($x);
        $xstr = strval($x);
        $xstr_rev = strrev($xstr);
        $x_rev = intval($xstr_rev);
        if($x_rev >= pow(2, 31)){
            return 0;
        }
        return $lt0 ? 0 - $x_rev : $x_rev;
    }
}

$s = new Solution();
var_dump($s->reverse(1534236469));