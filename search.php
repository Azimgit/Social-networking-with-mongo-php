<?php
require 'db.php';
include 'header.php';


$t=$db->logindata;
$id=$_GET['id'];

?>
<div class="container" style="border: crimson solid;position: absolute;top: 100px;left:100px;z-index: -1;  box-shadow: 10px 10px 5px #888888;">
	


<?php

$f=$t->find(['fname'=>$id]);
foreach($f as $row)
{ 
	$id=$row['_id'];
	$pic=$row['pic'];
	$name=$row['fname'];
	$lname=$row['lname'];
	$clg=$row['college'];
	
echo  "<div style='width:200px;'><a href='detail.php?id=$id'><img src='$pic' style='height:60px;width:60px;float:left;'><p style='position:relative;left:61px;top:0px;'>$name $lname<br>from $clg<p></a></div><br>";
}



?>




</div>
<!-- <div style="position: absolute;top: 300px;height: 100px;border: solid;width: 100px; "></div> -->