<?php
//执行用时 : 8 ms, 在所有 php 提交中击败了 77.78% 的用户
//内存消耗 : 15 MB, 在所有 php 提交中击败了 9.84% 的用户
class Solution {
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);
        $edges = intval($n/2);
        for($i=0; $i<$edges; $i++){ // $i 层数，洋葱
            // $i 层上的点 ($i, $j) 其中 $j<[$i, $n-1-$i]
            for($j=$i; $j<$n-1-$i; $j++){
                // (i, j) => (j, n-1-i)
                // (j, n-1-i) => (n-1-i, n-1-j)
                // (n-1-i, n-1-j) => (n-1-j, i)
                // (n-1-j, i) => (i, j)
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$n-1-$j][$i];
                $matrix[$n-1-$j][$i] = $matrix[$n-1-$i][$n-1-$j];
                $matrix[$n-1-$i][$n-1-$j] = $matrix[$j][$n-1-$i];
                $matrix[$j][$n-1-$i] = $temp;
            }
        }
        return $matrix;
    }
}
$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$s = new Solution();
print_r($matrix);
$s->rotate($matrix);
print_r($matrix);
