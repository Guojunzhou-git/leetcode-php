<?php
//执行用时 : 92 ms, 在所有 php 提交中击败了 15.93% 的用户
//内存消耗 : 15 MB, 在所有 php 提交中击败了 7.41% 的用户
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        asort($nums);
        $nums = array_values($nums);
        $nlen = count($nums); // [-3, 0, 1, 2] 1
        $closest_sum = $nums[0] + $nums[1] + $nums[2];
        for ($i = 0; $i < $nlen - 2; $i++) {
            $l = $i + 1;
            $r = $nlen - 1;
            while ($l != $r) {
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                echo $sum."\n";
                $closest_sum = abs($target - $sum) < abs($target - $closest_sum) ? $sum : $closest_sum;
                if($target < $sum){
                    $r--;
                }else{
                    $l++;
                }
            }
        }
        return $closest_sum;
    }
}
$s = new Solution();
print_r($s->threeSumClosest([0,2,1,-3], 1));