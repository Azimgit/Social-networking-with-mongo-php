<?php
session_start();
$user=$_SESSION["user"];
if(isset($user)==0)
{
	header("location:login.php");
}
$mysqli = new mysqli("localhost", "root", "", "test");
$q="select * from chat where to_='$user' AND read_=1";
$run=$mysqli->query($q);
if($run->num_rows)
	echo $run->num_rows;

