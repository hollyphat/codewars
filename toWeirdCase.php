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
    $t = 0;
    for($i = 0; $i < strlen($string); $i++){
        $out .= $t %2 == 0 ? "".strtoupper($string[$i])."" : "".$string[$i];
        if($string[$i] == " " && $t %2 == 0){
            $t = $i;
        }else{
            $t++;
        }

    }

    return $out;

}

//Tests

/*
var_dump(toWeirdCase("HeLlO WoRlD FoO BaR BaZ"));
var_dump(toWeirdCase("WeLl I GuEsS YoU PaSsEd"));

var_dump(toWeirdCase("Passed this one one foo one"));

var_dump(toWeirdCase("so far so gOOD"));
*/

var_dump(toWeirdCase("HeLlO yOu tHiS FoO I PaSsEd wOrLd fOo"));