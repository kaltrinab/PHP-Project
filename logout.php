<?php 
session_start();
echo "Logout Successfully!";
session_destroy();
header("Location: Contact.php");


    $username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
 { 
 	setcookie('username', '', time()-7000000, '/');
    setcookie('password','',time()-7000000,'/');
    header("Location: Contact.php");

}

?>
