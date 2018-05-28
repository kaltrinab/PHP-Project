<html>
<head>

</head>
<body>

<?php
$filename ="C:/xampp/htdocs/GitHub/PHP-Projekti/readfile.txt";
$file = fopen ($filename, "r");
if($file ==false)
{
	echo ("Error in opening file");
	exit();
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose ($file);

echo ("File size: $filesize bytes");
echo ("<pre>$filetext </pre>");
?>
</body>
</html>