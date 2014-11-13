<?php
include_once('m/autoload.php');

$c = strtolower(strip_tags(trim($_GET['c'])));

switch ($c) {
	case 'projects':
		$controller = new C_Projects();
		break;
	case 'cv':
		$controller = new C_CV();
		break;
	case 'contacts':
		$controller = new C_Contacts();
		break;
	default:
		$controller = new C_Main();
}

$controller->Request();

?>