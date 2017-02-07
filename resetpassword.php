<?php

/* // Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","smtp.gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","465");

// Please specify the return address to use
//ini_set('sendmail_from', 'nitesh.mishra143@gmail.com');

$to = "nitesh.mishra143@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "nitesh.mishra143@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
 */

//set SMTP php.ini
			ini_set("SMTP", "smtp.gmail.com");
			//echo ini_get("SMTP");
			ini_set("smtp_port","25");
			
			//setup variables
			$to = $_POST['email'];
			$subject = "Email from PHPAcademy";
			$headers="From: nmmishra.iipsmca@gmail.com";
			$body ="This email from name\n\n message";
			
			mail($to, $subject, $body, $headers);
			echo "Mail Sent."

?>