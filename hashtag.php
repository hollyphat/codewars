<?php



function generateHashtag($str) {
	/**
	 @@Name: HasgTag Generator
	 @@Url: https://www.codewars.com/kata/the-hashtag-generator/train/php

	 */
	
	$str = trim($str);
	if(strlen($str) == 0)
		return false;
	$str = str_replace(" ", "", ucwords($str));
	$str = "#".$str;

	if(strlen($str) > 140)
		return false;

	return $str;

 
}


var_dump(generateHashtag("foodlocker is your no 1 stop 4 all food stuff"));

var_dump(generateHashtag(""));
var_dump(generateHashtag("foodlocker is your no 1 stop 4 all food stuff foodlocker is your no 1 stop 4 all food stuff foodlocker is your no 1 stop 4 all food stuff foodlocker is your no 1 stop 4 all food stuff foodlocker is your no 1 stop 4 all food stuff foodlocker is your no 1 stop 4 all food stuff"));
?>