<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $sarr = array();
        for($i=0; $i<$numRows; $i++){
            array_push($sarr, array());
        }
        $col = 0;
        for($i=0; $i<strlen($s); $i++){
            if($col % ($numRows-1) == 0){

            }
        }
    }
}

$s = new Solution();
$s->convert('thePeoplesRepublicofChina', 4);