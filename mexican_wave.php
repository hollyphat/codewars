<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 11/27/2019
 * Time: 9:56 AM
 */

function wave($people){

    //good luck!
    $output = array();

    $words = str_split(strtolower("$people"));
    $words_array = strtolower("$people");
    if($words_array == "")
        return $output;

    for ($i = 0; $i < count($words); $i++){
        if($words[$i] == " ")
            continue;
        array_push($output, substr_replace($words_array, strtoupper($words[$i]), $i, 1));
    }

    return $output;

}



var_dump(wave("hello"));
var_dump(wave("codeWars"));
var_dump(wave(""));
var_dump(wave("two words"));
var_dump(wave(" gap "));
//var_dump(wave("codeWars"));
