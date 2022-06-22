<html>
<head>
<title>Page</title>
</head>
<body>
<form action=" " Method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="upload button">
</form>
</body>
</html>
<?php
	if(isset($_FILES['file']))
	{
		echo"<pre>";
		print_r($_FILES);
		echo"</pre>";
	$file_name=$_FILES['file']['name'];
	$file_size=$_FILES['file']['size'];
	$file_tmp=$_FILES['file']['tmp_name'];
	$file_type=$_FILES['file']['type'];
	move_uploaded_file($file_tmp,"saviour".$file_name);
	}
?>