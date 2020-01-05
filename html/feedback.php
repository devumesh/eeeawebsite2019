
<?php 
	$msg = $POST['f_msg'];
	$to = "ysuamss@gmail.com";
	$subject = "Feedback on Members Page";
	echo "Thanks for your feedback".$msg;
	if(mail($to, $subject, $msg)){
		echo "\n Mail Sent";
	}
	else{
		echo "\n Failed to send.";
	}
?>

