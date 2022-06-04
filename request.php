<?php

if(isset($_REQUEST['submit']))
{
$name= $_REQUEST['name']; 
$email= $_REQUEST['email']; 
$age= $_REQUEST['age'];

echo "name: ".$name."<br>";
echo "email: ".$email."<br>";
echo "age :".$age;
}
?>

<form method='request' action=''> 
<h1>MUDIT SHARMA </h1>
<h2>Form Handling using Request</h2> 
Name: <input type='text' name='name' /> <br/> 
Email: <input type='text' name='email' /> <br/> 
Age: <input type='text' name='age' /> <br/> 
<input type='submit' value='Submit' name='submit'>
</form>