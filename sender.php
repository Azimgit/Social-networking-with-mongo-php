<?php

session_start();
$user=$_SESSION["user"];
// $a=$_POST['a'];
 $user;
  $to=$_POST['a'];
if(isset($user)==0)
{
	header("location:login.php");
}


$mysqli = new mysqli("localhost", "root", "", "test");
$q="select * from chat where from_='$user' AND to_='$to'";
	$run=$mysqli->query($q);
	while($row=$run->fetch_array())
		echo "<p style='font-size:10px;border:solid yellow;width:100px;float:left;position:absolute;left:0px;'>you<br>". $row['msg']."</p><br><br><br>";


?>
