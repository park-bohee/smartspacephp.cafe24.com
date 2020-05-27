<?php
	$to = $_POST["to"];
	$subject = $_POST["title"];
	$message = $_POST["contents"];
    $from = $_POST["from"];
    $headers = "From: $from";

	if(mail($to, $subject, $message, $headers)) {
		echo "성공";
	} else {
		echo "실패";
    }
?>