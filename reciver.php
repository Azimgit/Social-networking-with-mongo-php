<?php

session_start();
$user=$_SESSION["user"];
if(isset($user)==0)
{
	header("location:login.php");
}


 $to=$_POST['a'];
   $user1="a@gmail.com";
require 'db.php';
$mysqli = new mysqli("localhost", "root", "", "test");
$q="select * from chat where from_='$to' AND to_='$user'";
$run=$mysqli->query($q);
	while($row=$run->fetch_array())
		echo "<p style='font-size:10px;border:solid pink;width:100px;float:right;position:absolute;right:0px;'>response<br>". $row['msg']."</p><br><br><br>";

?>