<?php
  $subject = $_POST['subject'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>

<?php
	$email_from = 'rudd.rocker@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the subject $subject.\n".
                            "Here is the message:\n $message".
?>

<?php

  $to = "rudd.rocker@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
