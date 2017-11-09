<?php
	//Import PHPMailer classes into the global namespace
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'vendor/autoload.php';
	
	//Create a new PHPMailer instance
	$mail = new PHPMailer(true);
	try{
		//Server settings
		$mail->SMTPDebug = 2;					// Enable verbose debug output
		$mail->isSMTP();						// Set Mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';			// Specify SMPT server(s)
		$mail->SMTPAuth = true;					// Enable SMTP Authentication
		$mail->Username = "cuea.oims@gmail.com";
		$mail->Password = "oims2017";
		$mail->SMTPSecure = 'ssl';				// Enable TLS encryption
		$mail->Port = 587;						// TCP port to connect to
		
		//Recipients
		$mail->setFrom('cuea.oims@gmail.com', 'OIMS Admin');
		$mail->addAddress('fwkomu@gmail.com');
		
		$body = '<p><strong>Hello</strong> this is my first email with PHPMailer</p>';
		
		//Content
		$mail->isHTML(true);
		$mail->Subject = 'PHPMailer GMail SMTP test';
		
		$mail->Body = $body;
		$mail->AltBody = strip_tags($body);   //Plain Text
		
		$mail->send();
		echo "Message has been sent!";
	} catch (Exception $e) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
?>