<?php
// $

session_start();
$user=$_SESSION["user"];
if(isset($user)==0)
{
	header("location:login.php");
}


$valid="abc";
$try="abc";
echo strcmp($valid,$try);
?>