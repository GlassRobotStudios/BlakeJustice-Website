<?php

require_once "Mail.php";

class SendEmail
{
	public static function sendAutomaticEmailTo($name, $emailAddress, $message)
	{
		$clientAddress = $_SERVER['REMOTE_ADDR'];
		$proxyAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

		$from = "$name <$emailAddress>";
		$to = "support@glassrobotstudios.com";
		$subject = "Blake Justice: Project Hero - Support Page";
		$contentType = "text/html";
		$replyTo = $emailAddress;
		$body = "
				<p>
					<h3>Name:</h3> 
					$name<br><br>

					<h3>Email:</h3>
					$emailAddress<br><br>

					<h3>Message:</h3>
					$message<br><br>
				</p>

				<p>
				----------------------------
				</p>

				<p>
					This email was send from <a href=\"http://blakejustice.co/support\" target=\"_blank\">http://blakejustice.co/support</a><br>
					Client IP Address: $clientAddress<br>
					Client Proxy Address: $proxyAddress<br>
				</p>
				";

		$host = "ssl://smtp.gmail.com";
		$port = "465";
		$username = "support@glassrobotstudios.com";
		$password = "Support-Mail";

		$headers = array (
			'From' => $from,
			'To' => $to,
			'Subject' => $subject,
			'Content-Type' => $contentType,
			'Reply-To' => $replyTo);

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
			return 1;
		}

		if (PEAR::isError($mail)) 
		{
			return 2;
		}
		return 0;
	}
}

?>