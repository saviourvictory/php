<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File using PHP</title>
</head>
<body>
    <h2>Download file from here:</h2>
    <a href="download.php?file=image.jpg">Click Here </a>
    
</body>
</html>
<?php
if(!empty($_GET['file']))
{
    $filename=basename($_GET['file']);
    $filepath='destination/'.$filename;
    if(!empty($filename)&& file_exists($filepath))
    {
        header("Cache-control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition :attachment; filename=$filename");
        header("Content-type: application/zip");
        header("Content-Transfer-Emcoding :binary ");
        readfile($filename);
        exit;
    }
}
else{
    echo"The file doesnot exist";
}
?>