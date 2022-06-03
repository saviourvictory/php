<?php
SESSION_START();
$_SESSION["login"]="successful";
echo "session start</br>";
if(isset($_SESSION['login']))
{
   print_r($_SESSION);
}
SESSION_unset();
SESSION_destroy();
echo "session delete";
?>