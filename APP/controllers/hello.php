<?php
class Hello extends Controller {
    function __construct() {
		parent::__construct();
	}
	function send_mail(){
		if(isset($_POST['send']))
        {
		$to_email=$_POST['to'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
			
		$to = $to_email;
        $subject = $subject;
        $txt = $message;
        $headers = "From: DonateToHeal19@gmail.com";
		mail($to,$subject,$txt,$headers);
		}
        $this->view->render('hello/send_mail');
	}
}
?>