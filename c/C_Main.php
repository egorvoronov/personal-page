<?php
class C_Main extends C_Base {
	
	// Handle request
	protected function OnInput() {

		// Inheritance from parent
		parent::OnInput();


		// POST PROCESSING
		if($this->IsPost()) {
			$name = substr($_POST['name'], 0, 100);
			$contactInfo = substr($_POST['contactInfo'], 0, 100);
			$question = substr($_POST['question'], 0, 2000);

			$subj = "New message from customer $name";
			$body = "$contactInfo: $question";

			$f = fopen('questions.txt', 'a+');
			fwrite($f, date('y-M-d H:i:s') . ' - ' . $name . "\r\n" . $contactInfo . "\r\n" . $question . "\r\n!!!!!!!!!\r\n");
			fclose($f);			

			if(mail('egorvoronov@gmail.com', $subj, $body)) {
				$message = "<strong>Thank you!</strong> You mail has been sent. You'll receive answer soon.";
				$_SESSION['message'] = $message;
			}
			else {
				$error = "<strong>Error</strong> has been happened when we try to deliver your mail";
				$_SESSION['error'] = $error;
			}
			$_SESSION['show'] = 1;
			header('Location: /');
			exit();
		}

		// GET PROCESSING
		if($_SESSION['show'] === 1) {
			$this->message = $_SESSION['message'];
			$this->error = $_SESSION['error'];
			unset($_SESSION['show']);
			unset($_SESSION['message']);
			unset($_SESSION['error']);
		}

		// redefine title
		$this->title = 'Egor Voronov: Home page';

		// redefine active item
		$this->activeitem = 'Home';

		// define content of body
		$vars = array(
			'message' => $this->message,
			'error' => $this->error
		);
		$this->body_content = $this->Generate_HTML('v/view_index.php', $vars);
	}
}