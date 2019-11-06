<?php

function solution($nums, $target){
    for($i=0; $i<count($nums)-1; $i++){
        for ($j=$i+1; $j<count($nums); $j++){
            if($nums[$i] + $nums[$j] == $target){
                return [$i, $j];
            }
        }
    }
}

$data = [2,1,3,2,4,0];
print_r(solution($data, 4));