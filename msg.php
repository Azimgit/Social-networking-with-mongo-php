<?php
session_start();
$user=$_SESSION["user"];
if(isset($user)==0)
{
	header("location:login.php");
}

$mysqli = new mysqli("localhost", "root", "", "test");
$q="select * from chat where to_='$user'";
$run=$mysqli->query($q);
while ($row=$run->fetch_array())
{
	$id=$row['from_'];
	$n=$row['name'];
echo "<a href='chat.php?id=$id'>$n</a><br>";}

	?>