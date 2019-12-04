<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 11/27/2019
 * Time: 7:59 PM
 */

function toCamelCase($str){
    //ctype_upper

    $str = str_replace("_"," ", $str);
    $str = str_replace("-"," ", $str);
    $str_array = explode(" ", $str);

    $option = checkStr($str_array);

    var_dump($option);
    exit();

    if($option == true){
        $word = implode(" ", $str_array);
        //$word = strtolower($word);
        $word = ucwords($word);
    }else{
        //$str_array[0] =  strtolower($str_array[0]);
        for($i = 1; $i < count($str_array); $i++)
           $str_array[$i] =  ucfirst($str_array[$i]);

        $word = implode(" ", $str_array);
    }

    var_dump(str_replace(" ","", $word));

}


function checkStr($str){

    foreach ($str as $s){
        if( ctype_upper($s[0]) == false) {
            return false;
        }
    }

    return true;
}


/*toCamelCase("the-stealth-warrior");
toCamelCase("The_Stealth_Warrior");
toCamelCase("This_is_The_one");
*/
toCamelCase("IAmAProgrammer");
toCamelCase("iAmAProgrammer");