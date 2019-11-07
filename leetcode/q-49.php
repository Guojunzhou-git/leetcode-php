<?php
class Solution {
    public $map = [
        'a' => 2,
        'b' => 3,
        'c' => 5,
        'd' => 7,
        'e' => 11,
        'f' => 13,
        'g' => 17,
        'h' => 19,
        'i' => 23,
        'j' => 29,
        'k' => 31,
        'l' => 37,
        'm' => 41,
        'n' => 43,
        'o' => 47,
        'p' => 53,
        'q' => 59,
        'r' => 61,
        's' => 67,
        't' => 71,
        'u' => 73,
        'v' => 79,
        'w' => 83,
        'x' => 89,
        'y' => 97,
        'z' => 101,
    ];
    /**
     * @param String'' $strs
     * @return String''''
     */
    function groupAnagrams($strs) {
        $strs_power = [];
        foreach ($strs as $str) {
            $str_power = $this->getStrPower($str);
            $strs_power[$str_power][] = $str;
        }
        return array_values($strs_power);
    }

    function getStrPower($str){
        $power = 1;
        for($i=0; $i<strlen($str); $i++){
            $ch_power = array_key_exists($str[$i], $this->map) ? $this->map[$str[$i]] : 0;
            if($ch_power == 0){
                return 0;
            }
            $power = $power * $ch_power;
        }
        return $power;
    }
}
$s = new Solution();
//print_r($s->groupAnagrams(['aba', 'aab', 'ab', 'baa']));


function p($x, $n, $i=1, &$res=1){
    if($i <= $n){
        $res = $res * $x;
        p($x, $n, $i+1, $res);
    }
    return $res;
}
echo p(2, -2);
//sushu26();
//function sushu26(){
//    $sushu = array();
//    $n = 2;
//    while(true){
//        $is_sushu = true;
//        for($i=2; $i<$n; $i++){
//            if($n % $i == 0){
//                $is_sushu = false;
//                break;
//            }
//        }
//        if($is_sushu){
//            array_push($sushu, $n);
//            if(count($sushu) == 26){
//                break;
//            }
//        }
//        $n++;
//    }
//    print_r($sushu);
//}