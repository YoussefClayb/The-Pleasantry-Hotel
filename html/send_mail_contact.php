<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = $_POST['email'];
		$to = 'hello@thepleasantryhotel.com';
		$subject = $_POST['subject'];

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
?>
