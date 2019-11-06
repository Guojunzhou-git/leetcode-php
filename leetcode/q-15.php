<?php
//执行用时 : 200 ms, 在所有 php 提交中击败了 95.48% 的用户
//内存消耗 : 24.4 MB, 在所有 php 提交中击败了 6.45% 的用户
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        asort($nums);
        $nums = array_values($nums);
        $ans = array();
        $nlen = count($nums);
        for($i=0; $i<$nlen-2; $i++){
            if($nums[$i] > 0){
                break;
            }
            if($i > 0 && $nums[$i] == $nums[$i-1]){
                continue;
            }
            $l = $i + 1;
            $r = $nlen - 1;
            while($l < $r){
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                if($sum == 0){
                    array_push($ans, array($nums[$i], $nums[$l], $nums[$r]));
                    while($l < $r && $nums[$l] == $nums[$l+1]) {
                        $l++;
                    }
                    while($l < $r && $nums[$r] == $nums[$r-1]) {
                        $r--;
                    }
                    $l++;
                    $r--;
                }elseif ($sum > 0){
                    $r--;
                }else{
                    $l++;
                }
            }
        }
        return $ans;
    }
}
$s = new Solution();
print_r($s->threeSum([-1,0,1,2,-1,-4]));