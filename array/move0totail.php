<?php
/*
给定一个数组 nums，编写一个函数将所有 0 移动到数组的末尾，同时保持非零元素的相对顺序。
示例:
    Input:
    [0,1,0,3,12]
    Output:
    [1,3,12,0,0]
说明:
    必须在原数组上操作，不能拷贝额外的数组。
    尽量减少操作次数。
 */

function solution(&$arr){
    $k = 0;
    for($i=0; $i<count($arr); $i++){
        if($arr[$i] > 0){
            $arr[$k++] = $arr[$i];
        }
    }
    for($i=$k; $i<count($arr); $i++){
        $arr[$i] = 0;
    }
}

$data = [1,2,3,1,0,3,0,4];
print_r($data);
solution($data);
print_r($data);