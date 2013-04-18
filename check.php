<?php
	require_once ('SendEmail.php');
	
	$name = $_POST["modal-inputName"];
	$email = $_POST["modal-inputEmail"];
	$message = $_POST["modal-inputMessage"];

    $page = $_SERVER['HTTP_REFERER'];
    $server = "http://".$_SERVER['SERVER_NAME']."/support";

    if ($page == $server) 
    {
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
        	// echo "Valid";
        	$var = SendEmail::sendAutomaticEmailTo($name, $email, $message);

        	if ($var == 0) 
        	{
    	    	header("Location: support?check=true");
        	}
        	else
        	{
        		header("Location: support?check=false&error=$var");	
        	}
        }
        else
        {
        	header("Location: support?check=false");
        }
    }
    else
    {
        echo "You need to enter in the form on the support page";
    }
 ?>