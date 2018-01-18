<?php
session_start();
$user=$_SESSION["user"];
require 'db.php';
$t=$_POST['text1'];
// $from=$_POST['from'];
$to=$_POST['to'];
$name=$_POST['n'];
$clg=$_POST['clg'];
if($t=="")
die("<script> alert('Enter text')</script>");
$mysqli = new mysqli("localhost", "root", "", "test");
// $q="select * from chat where from_='$user' AND to_='$to'";
//  $run=$mysqli->query($q);
//   while ($row=$run->fetch_array())
//   	 echo $to=$row['from_'];
 
 
  

$q="insert into chat (from_,to_,msg,read_,name,clg)values('$user','$to','$t',1,'$name','$clg')";
 $run=$mysqli->query($q);
 // $q="select * from chat where from_='$user' AND to_='$to'";
 // $run=$mysqli->query($q);
 // while ($row=$run->fetch_array()) {
 // 	echo "<p style='font-size:10px;border:solid yellow;width:100px;float:left;position:absolute;'>$user to $to<br>".$row['msg']."</p><br><br><br>";}
 // 	$q="select * from chat where from_='$to' AND to_='$user'";
 	//  $run=$mysqli->query($q);
 	// while($row=$run->fetch_array())
		// echo "<p style='font-size:10px;border:solid pink;width:100px;float:right;position:absolute;right:0px;'>respond $to to $user<br>". $row['msg']."</p><br><br><br>";
 
?>