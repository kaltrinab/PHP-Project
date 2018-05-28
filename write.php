<html>
<head>

</head>
<body>

<?php
try{
$filename ="C:/xampp/htdocs/GitHub/PHP-Projekti/writefile.txt";
$file = fopen ($filename, "w");
if($file ==false)
{
	echo ("Error in opening file");
	exit();
}
fwrite ($file, "Just a simple test !");
fclose ($file);

if (file_exists($filename))
{
	$filesize = filesize($filename);
	$msg ="File created with name $filename";
	$msg = "containing $filesize bytes";
	echo($msg);
}
else
{
	echo ("File $filename does not exit");
}
}

catch (customException $e) {
    echo $e->errorMessage();
  }
?>
</body>
</html>