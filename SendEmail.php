<?php

require_once "dependencies/Mail.php";

class SendEmail
{
	public static function sendAutomaticEmailTo($name, $emailAddress, $message)
	{
		$from = $name;
		$to = "support@glassrobotstudios.com";
		$subject = "Blake Justice: Project Hero";
		$contentType = 'text/html';
		$body = "<p>
					This email was send from <a href=\"http://blakejustice.co/support\">http://blakejustice.co/support</a>. 
				</p>
				<p>
					$message
				</p>
				<p>";

		$host = "ssl://smtp.gmail.com";
		$port = "465";
		$username = "support@glassrobotstudios.com";
		$password = "Support-Mail";

		$headers = array (
			'From' => $from,
			'To' => $to,
			'Subject' => $subject,
			'Content-Type' => $contentType);

		$smtp = Mail::factory(
			'smtp',
			array (
				'host' => $host,
				'port' => $port,
				'auth' => true,
				'username' => $username,
				'password' => $password));

		$mail = $smtp->send($to, $headers, $body);

		if (PEAR::isError($smtp)) 
		{
			echo("<p>" . "vasdf ". $smtp->getMessage() . "</p>");
		}

		if (PEAR::isError($mail)) {
			//echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			//echo("<p>Message successfully sent!</p>");
		}
	}
}

?>