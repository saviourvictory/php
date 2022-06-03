<?php
echo"<center>SAVIOUR VICTORY<br><hr>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo"<br><hr>";
$numbers = array(14, 9, 90, 22, 21);
rsort($numbers);
print_r($numbers);
echo"<br><hr>";
$age = array("Aryan"=>"15", "Saviour"=>"37", "Mudit"=>"13");
asort($age);
print_r($age);
echo"<br><hr>";
$age = array("Shubham"=>"25", "Tushar"=>"7", "Aakash"=>"36");
ksort($age);
print_r($age);
echo"<br><hr>";
$age = array("Gagandeep"=>"19", "Yash"=>"18", "Rohit"=>"43");
arsort($age);
print_r($age);
echo "<br><hr>";
$age = array("Tavish"=>"21", "Gaurav"=>"38", "Raj"=>"17");
krsort($age);
print_r($age);
echo "<br><hr>";
?>