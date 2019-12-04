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
    $string_array = explode(" ", $string);

    $out = "";
    foreach ($string_array as $value){
        for($i = 0; $i < strlen($value); $i++){
            $out .= $i %2 == 0 ? "".strtoupper($value[$i])."" : "".$value[$i];
        }
        $out .= " ";
    }
    return trim($out);

}

//Tests


var_dump(toWeirdCase("HeLlO WoRlD FoO BaR BaZ"));
var_dump(toWeirdCase("WeLl I GuEsS YoU PaSsEd"));

var_dump(toWeirdCase("Passed this one one foo one"));

var_dump(toWeirdCase("so far so gOOD"));

var_dump(toWeirdCase("HeLlO yOu tHiS FoO I PaSsEd wOrLd fOo"));

var_dump(toWeirdCase("I WeLl OnE BaZ WeLl bAr"));