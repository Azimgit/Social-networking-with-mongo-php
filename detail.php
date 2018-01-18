<?php
require 'db.php';
include 'header.php';


$t=$db->logindata;
$id=$_GET['id'];

?>
<div class="container" style="border: crimson solid;position: absolute;top: 100px;left:100px;z-index: -1;height: 600px">
	


<?php
 $v=new MongoDB\BSON\ObjectId($id);
$f=$t->find(['_id'=>$v]);
foreach($f as $row)
{ 
	$branch=$row['branch'];
    $pic=$row['pic'];
	$name=$row['fname'];
	$lname=$row['lname'];
	$clg=$row['college'];
	$phno=$row['phone'];
	$mail=$row['email'];
	

}	
 echo "<img src='$pic' style='height:100px;width:100px;float:left;' >";

echo "<p style='left:61px;top:0px;float:left;color:blue '>$name $lname<p>";




echo  "<table style='position:absolute;top:100px;left:300px'><th>$name  Details</th><tr><td>Full Name</td><td>$name$lname</td><tr><td>Education</td><td>$branch</td><tr><tr><td>University/<br>college</td><td>$clg</td></tr><tr><td>Contact <br>number</td><td>$phno</td></tr><tr><td>Email</td><td>$mail<a href='chat.php?id=$mail'><button>chat</button></a></td></tr></table>";

?>


</div>