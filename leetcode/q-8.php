<?php
class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $str = trim($str);
        $allow = ['-', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        if(!in_array($str[0], $allow)){
            return 0;
        }else{
            $lt0 = $str[0] == '-' ? true : false;
            $str_chars = array();
            for($i=0; $i<strlen($str); $i++){

            }
        }
    }
}
$s = new Solution();
echo $s->myAtoi('a456');