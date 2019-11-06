<?php
/**
 * 二分法查找
 */

function solution($arr, $target){
    $left = 0;
    $right = count($arr) - 1;
    while($left <= $right){
        $middle = intval($left + ($right - $left) / 2);
        if($arr[$middle] == $target){
            return $middle;
        }else if($arr[$middle] < $target){
            $left = $middle;
        }else{
            $right = $middle-1;
        }
    }
    return -1;
}

$data = [1,3,5,7,9,11,13,15,17,19,21];
print_r($data);
var_dump(solution($data, 17));