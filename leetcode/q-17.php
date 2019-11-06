<?php
//执行用时 : 8 ms, 在所有 php 提交中击败了 79.27% 的用户
//内存消耗 : 15.1 MB, 在所有 php 提交中击败了 6.90% 的用户
class Solution {
    private $map = [
        '2' => ['a','b','c'],
        '3' => ['d','e','f'],
        '4' => ['g','h','i'],
        '5' => ['j','k','l'],
        '6' => ['m','n','o'],
        '7' => ['p','q','r', 's'],
        '8' => ['t','u','v'],
        '9' => ['w','x','y','z'],
    ];
    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $combination = array();
        for($i=0; $i<strlen($digits); $i++){
            if(!array_key_exists($digits[$i], $this->map)){
                continue;
            }else{
                if(0 == count($combination)){
                    $combination = $this->map[$digits[$i]];
                }else{
                    $combination = $this->combinationOfTwoArray($combination, $this->map[$digits[$i]]);
                }
            }
        }
        return $combination;
    }

    function combinationOfTwoArray($arr1, $arr2){
        $combination = array();
        foreach ($arr1 as $val1) {
            foreach ($arr2 as $val2) {
                array_push($combination, $val1.$val2);
            }
        }
        return $combination;
    }
}

$s = new Solution();
print_r($s->letterCombinations("239"));