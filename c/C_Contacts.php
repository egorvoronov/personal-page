<?php
class C_Contacts extends C_Base {

	// inheritance and redefining
	protected function OnInput() {
		// inheritance
		parent::OnInput();

		// redefine title
		$this->title = 'Egor Voronov`s Contacts';

		// redefine active item
		$this->activeitem = 'Contacts';

		// define content of body
		$this->body_content = $this->Generate_HTML('v/view_contacts.php');
	}
}