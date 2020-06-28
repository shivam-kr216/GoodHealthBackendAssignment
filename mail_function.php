<?php
function otp_sender(){

	require 'sendGrid/vendor/autoload.php';
	$mail=$GLOBALS['mail'];
	$otp= $GLOBALS['otp'];
	$uname=$GLOBALS['uname'];

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("shivamkr216@outlook.com", "rishu");
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
