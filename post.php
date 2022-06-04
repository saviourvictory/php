<HTML>
<BODY>
<FORM METHOD="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
NAME:<INPUT TYPE="TEXT" NAME="fname">
<INPUT TYPE="SUBMIT">
</form>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$NAME= $_POST['fname'];
		IF(empty($name)){
			echo "name is empty";
		}else{
			echo $name;

		}
	}
?>
</body>
</html>