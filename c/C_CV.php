<?php
class C_CV extends C_Base {
	
	// input
	protected function OnInput() {
		// inheritance
		parent::OnInput();

		// redefine title
		$this->title = 'Egor Voronov`s CV';

		// redefine active item
		$this->activeitem = 'CV';

		// define content of body
		$this->body_content = $this->Generate_HTML('v/view_cv.php');

	}

}