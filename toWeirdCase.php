<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 12/4/2019
 * Time: 2:42 PM
 */

/**
 * @url: https://www.codewars.com/kata/weird-string-case/train/php
 * */

function toWeirdCase($string) {
    // TODO
    $string = strtolower(trim($string));

    $out = "";
    for($i = 0; $i < strlen($string); $i++){
        $out .= $i %2 == 0 ? ucfirst($string[$i]): $string[$i];
    }

    return $out;

}