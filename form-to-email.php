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
