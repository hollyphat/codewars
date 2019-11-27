<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 11/27/2019
 * Time: 9:52 AM
 */


function solution($str) { //https://www.codewars.com/kata/split-strings/train/php
    $out = array();


    if(strlen($str) % 2 != 0)
        $str = $str . "_";
    $str_array = str_split($str);

    for($i = 0; $i < count($str_array); $i+=2){
        $arr = $str_array[$i]."".$str_array[$i+1];
        array_push($out,$arr);
    }

    return $out;
}


//var_dump(solution("cdabefg"));
