<?php

// Base controller

abstract class C_Base extends C_Controller {
	protected $title;			// title of the page
	protected $menu;			// common menu
	protected $active_item;		// active element of menu
	protected $body_content;	// content of page
	protected $message;			// success message
	protected $error;			// error message

	protected function OnInput() {
		session_start();

		// create common menu here
		$this->menu = array(
			'/' => 'Home',
			'?c=cv' => 'CV',
			'?c=contacts' => 'Contacts'
		);
	}
	
	// output
	protected function OnOutput() {
		// generate common template
		$vars = array(
			'title' => $this->title,
			'menu' => $this->menu,
			'activeitem' => $this->activeitem,
			'user' => $this->user,
			'body_content' => $this->body_content,
			'message' => $this->message,
			'error' => $this->error
		);	
		$page = $this->Generate_HTML('v/view_template.php', $vars);
		echo $page;
	}	
}
