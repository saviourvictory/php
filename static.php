<html>
<?php
function myfunction()
{
	static $x=10;
	echo "$x<br>";
	$x++;
    echo "$x<br>";
}
echo "SAVIOUR VICTORY<br>";
myfunction();
myfunction();
myfunction();
?>
</html>