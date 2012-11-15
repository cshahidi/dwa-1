<?php

class scratch_controller extends base_controller {
	
	public function multiple_views_example() {
	
		# Load the first view
		$view1 = View::instance("v_scratch_view1");
		
		# Load the second view in the first view
		$view1->view2 = View::instance("v_scratch_view2");
		
		# Render the first view
		echo $view1;
	
	}
	
	public function email_test() {

		$_POST['email'] = "susan@susanbuck.net";
		$_POST['full_name'] = "Susan Buck";
		
	    $to[] = Array("name" => $this->user->first_name, "email" => $_POST['email']);
	    $from = Array("name" => APP_NAME, "email" => APP_EMAIL);
	    $subject = "Welcome to SumADay!";
	    $body = "Hi ".$_POST['full_name'].", <br>Thanks for joining " . APP_NAME . '! Click <a href="http://www.sumaday.com" title="First Summary">here</a> to post your first entry.';
	    $cc = "";
	    $bcc = "";
	    $email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);
	    
	}

}