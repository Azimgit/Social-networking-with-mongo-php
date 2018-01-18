<?php
require 'db.php';
echo $id=$_POST['id'];
 echo $num=$_POST['changenum'];

$update=$db->logindata->updateOne(['email'=>$id],['$set'=>['phone'=>$num]]);
header("location:profile.php");


?>