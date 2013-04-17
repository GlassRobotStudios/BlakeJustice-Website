<?php
	// require_once('recaptchalib.php');

	// $privatekey = "6LcP7N8SAAAAALcPPH8o-WRJzIVDpKA9Ns4G8wAL";
	// $recaptchaChallenge = $_POST["modal-recaptcha_challenge_field"];
	// $recaptchaResponse = $_POST["modal-recaptcha_response_field"];

	// echo $recaptchaResponse . "\n";
	// echo $recaptchaChallenge . "\n";

	// $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $recaptchaChallenge, $recaptchaResponse);

	// if (!$resp->is_valid) 
	// {
	// 	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again."."(reCAPTCHA said: " . $resp->error . ")");
	// } 
	// else 
	// {
	// 	echo "OK";
	// }

	ini_set("display_errors",1); 
	error_reporting(E_ALL);

	// set_include_path(__dir__.'/dependencies');

	require_once ('SendEmail.php');
	
	$name = $_POST["modal-inputName"];
	$email = $_POST["modal-inputEmail"];
	$message = $_POST["modal-inputMessage"];

	$check = false;

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$check = true;
    }
    else
    {
    	die("Not a valid email or name");	
    }

    if (!empty($name)) 
    {
    	$check = true;
    }
    else
    {
    	die("Not a valid email or name");
    }

    if ($check) 
    {
    	echo "Valid";
    	SendEmail::sendAutomaticEmailTo($name, $email, $message);
    }


 ?>