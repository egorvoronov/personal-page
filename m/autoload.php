<?php
function __autoload($classname) {
	$type = explode('_', $classname);
	
	switch($type[0]) {
		case 'C':
			include_once('c/' . $classname . '.php');
			break;
		case 'M':
			include_once('m/' . $classname . '.php');
			break;
	}
}
?>