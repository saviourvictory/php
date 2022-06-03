<?php
$to="xyz@gmail.com";
$subject="demo";
$message="php mail function";
$header=[ mine version 1.0;          //or can be written as $header=array[ mine version 1.0;(with array)		 content-type plaintext;
		  characterset UTF-8;
		  $from "abc@gmail.com";
		  $cc "ab@gmail.com"];
 if(mail($to,$from,$subject,$headers))
	{
		echo "mail sent";

	}
	else
	{
		echo"mail not sent sucessfully";
	}
?>