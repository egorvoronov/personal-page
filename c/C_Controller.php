<?php

// main controller
abstract class C_Controller {
	
	// Полная обработка HTTP запроса.
	public function Request() {
		$this->OnInput();
		$this->OnOutput();
	}

	
	// get helper
	protected function IsGet() {
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}

	// post helper
	protected function IsPost() {
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	// html helper
	protected function Generate_HTML($viewname, $vars = array()) {
		// setting varibles to template
		foreach($vars as $key => $value) {
			$$key = $value;
		}
		
		// generate html to string
		ob_start();
			include $viewname;
		return ob_get_clean();
	}
}