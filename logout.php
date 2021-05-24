<?php
//Get Heroku ClearDB connection information
error_reporting(1);
$server="remotemysql.com";
$user="pBc1y4gdCU";
$dbname="pBc1y4gdCU";
$password="enO5z5EJpi";
$con=mysqli_connect($server,$user,$password,$dbname);
if($con)
{
	  // echo"connected";
}
else
{
	die(mysqli_connect_error());
}     
session_start();
//SET FLAG AS FALSE AND RETURN TO HOME PAGE
 $_SESSION['loggedin'] = False;
 header('location:index.php?uid=');
?>
