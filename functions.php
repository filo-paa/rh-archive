<?php

function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function logMe($filename,$webpage) {
	$fh = fopen($filename, "a");
	$useragent = $_SERVER ['HTTP_USER_AGENT'];
	// date, page, ip, user agend
	fwrite($fh,date("Y-m-d, H:i:s") . ", ".$webpage.",\t" . getUserIP() . ", " . $useragent . "\n");
	fclose($fh);
}



?>