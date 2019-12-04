<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 12/4/2019
 * Time: 11:24 AM
 */

function likes( $names ) {

    // Your code here...
    if(!is_array($names) || count($names) == 0)
        return "no one likes this";

    if(count($names) < 4){

        if(count($names) == 2){
            return "$names[0] and $names[1] like this";
        }elseif (count($names) == 1){
            return "$names[0] likes this";
        }else{
            return "$names[0], $names[1] and $names[2] like this";
        }
    }else{
        $extra = count($names) - 2;
        $name_tag = "";
        for($k = 0; $k < 2; $k++){
            if($k == 1){
                $name_tag .= $names[$k]. "";
            }else{
                $name_tag .= $names[$k].", ";
            }
        }
        return "$name_tag and $extra others like this";
    }
}

var_dump(likes(["Peter"]));

var_dump(likes (["Jacob", "Alex"])); // must be "Jacob and Alex like this"
var_dump(likes ( ["Max", "John", "Mark"])); // must be "Max, John and Mark like this"
var_dump(likes ( ["Alex", "Jacob", "Mark", "Max"])); //