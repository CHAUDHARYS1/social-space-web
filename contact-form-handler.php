<?php
	$name = $_POST['name'];
	$visitor_title = $_POST['title'];
	$visitor_email = $_POST['email'];
	$visitor_phone = $_POST['phone'];
	$visitor_company = $_POST['company'];
	$project_details = $_POST['details'];

	$email_from = "	_mainaccount@socialspaceweb.com";
	$email_subject = "You received an email from $name";
	$email_body = "Name: $name.\n".
					"Title: $visitor_title.\n".
					"Email Address: $visitor_email.\n".
					"Phone Number: $visitor_phone.\n".
					"Company: $visitor_company.\n".
					"Project Description: $project_details.\n";

	$to = "isocialspace@gmail.com";

	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body, $headers);
	header("Location:thankyou");
	
?>
