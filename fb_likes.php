<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 12/4/2019
 * Time: 11:24 AM
 */

function likes( $names ) {

    // Your code here...
    if(!is_array() || count($names) == 0)
        return "No one likes this";

    if(count($names) < 4){
        $name_tag = "";
        for($k =0; $k < count($names); $k++){
            if($k == count($names) - 1){
                $name_tag .= $names[$k]. " ";
            }else{
                $name_tag .= $name_tag[$k]." and ";
            }
        }

        return "$name_tag like this";
    }
}