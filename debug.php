<?php
// creating debug function
function debug($var) {
	$f = fopen('debug.log', 'a+');
	fwrite($f, date('y-m-d h:i:s') . "\r\n");
	fwrite($f, 'тут я, тут...' . "\r\n");
	fwrite($f, "$var" . "\r\n");
	fclose($f);
}

/*
/////////////////////////////////////////////////////
include_once 'debug.php';
/////////////////////////////////////////////////////
ob_start();
var_dump($count);
$j = ob_get_clean();
debug($j);
/////////////////////////////////////////////////////
*/

?>