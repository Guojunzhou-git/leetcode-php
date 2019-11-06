<?php
//执行用时 : 8 ms, 在所有 php 提交中击败了 78.95% 的用户
//内存消耗 : 15.3 MB, 在所有 php 提交中击败了 70.83% 的用户
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        if($n == 0){
            return [];
        }
        $total = [];
        array_push($total, ['']);
        array_push($total, ['()']);
        for($i=2; $i<=$n; $i++){
            $ti = [];
            for($j=0; $j<$i; $j++){
                $jl = $total[$j];
                $jr = $total[$i-1-$j];
                foreach ($jl as $sl){
                    foreach ($jr as $sr){
                        $tis = '('.$sl.')'.$sr;
                        array_push($ti, $tis);
                    }
                }
            }
            array_push($total, $ti);
        }
        return $total[$n];
    }
}
$s = new Solution();
print_r($s->generateParenthesis(5));