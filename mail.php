<?php
$to="xyzgmail.com";
$from="abc@gmail.com";
$subject="hello";
$headers="from:$from";
echo"ARYAN THAKUR";
if(mail($to,$from,$subject,$headers))
	{
		echo "mail sent";

	}
	else
	{
		echo"mail not sent sucessfully";
	}
?>

