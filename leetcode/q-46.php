<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $all_case = [];
        $this->cnn($nums, 0, $all_case);
        return $all_case;
    }

    function cnn($nums, $pos, &$all_case){
        if($pos == count($nums)-1){
            array_push($all_case, $nums);
        }else{
            for($i=$pos; $i<count($nums); $i++){
                $this->swap($nums[$i], $nums[$pos]);
                $this->cnn($nums, $pos+1, $all_case);
                $this->swap($nums[$i], $nums[$pos]);
            }
        }
    }

    function swap(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
}

$s = new Solution();
//print_r($s->permute([1,2,3]));


function cnn($nums, $pos, $stop, &$all){
    if($pos == $stop){
        array_push($all, array_slice($nums, 0, $stop));
    }else{
        for($i=$pos; $i<count($nums); $i++){
            swap($nums[$i], $nums[$pos]);
            cnn($nums, $pos+1, $stop, $all);
            swap($nums[$i], $nums[$pos]);
        }
    }
}

function swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$all = [];
cnn([1,2,3,4,5,6,7,8,9], 0, 1, $all);
print_r($all);




