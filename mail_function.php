<?php
function otp_sender(){

	require 'sendGrid/vendor/autoload.php';
	$mail=$GLOBALS['mail'];
	$otp= $GLOBALS['otp'];
	$uname=$GLOBALS['uname'];

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("johndoe11708693@outlook.com", "John doe");
	$email->setSubject('OTP verification');
	try {
	    $email->addTo("$mail","$uname");
	} catch (SendGrid\Mail\TypeException $e) {
	    echo 'Caught type exception: '. $e->getMessage() ."\n";
	}
	$email->addContent(
	    "text/html", "<p>One Time Password(OTP): </p>".$otp
	);
	$sendgrid = new \SendGrid('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');
	try {
		$GLOBALS['result']=1;
	    $response = $sendgrid->send($email);
	   /* print $response->statusCode() . "\n";
	    print_r($response->headers());
	    print $response->body() . "\n";*/
	    
	} catch (Exception $e) {
	    echo 'Caught exception: '. $e->getMessage() ."\n";
	    $GLOBALS['result']=0;
	}
}

?>
