<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        // (0,0) -> (0,n-2); (0,n-1) -> (m-2,n-1); (m-1,n-1) -> (m-1,1); (m-1,0) -> (1,0)
        $row = count($matrix);
        $col = count($matrix[0]);
        if($row == 1){
            return $matrix[0];
        }
        $circle = 0;
        $out = [];
        while($row- 2 * $circle > 0 && $col - 2 * $circle > 0){
            // top: left -> right
            for($c=$circle; $c<$col-1-$circle; $c++){
                array_push($out, $matrix[$circle][$c]);
            }
            // right: top -> bottom
            for($r=$circle; $r<$row-1-$circle; $r++){
                array_push($out, $matrix[$r][$col-1-$circle]);
            }
            // bottom: right -> left
            for($c=$col-1-$circle; $c>$circle; $c--){
                array_push($out, $matrix[$row-1-$circle][$c]);
            }
            // left: bottom -> top
            for($r=$row-1-$circle; $r>$circle; $r--){
                array_push($out, $matrix[$r][$circle]);
            }
            $circle++;
        }
        return $out;
    }
}

$matrix = [
    [1,2,3],
    [5,6,7],
    [9,1,2],
//    [4,5,6,7],
];
$s = new Solution();
print_r($s->spiralOrder($matrix));