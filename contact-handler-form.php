<?php

	if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "ryan96db@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);

	header("Location: contact.php?mailsend");

	}



	

	// $email_from = "ryandb1596@gmail.com";

	// $email_subject = "New Form Submission"; 

	// $email_body = "User Name: ". $name. ".\n". "User Email: ". $visitor_email.".\n"
	// . "User Message: ". $message. ".\n";

	// $to = "ryan96db@gmail.com";

	// $headers = "From: ". $email_from. "\r\n";

	// $headers = "Reply-To: ". $visitor_email. "\r\n" 

	// mail($to,$email_subject,$email_body,$headers);

	// header("Location: contact.html");

	


?>
