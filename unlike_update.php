
<?php

require 'db.php';?>

<?php
$id=$_GET["id"];
 $v=new MongoDB\BSON\ObjectId($id);
require 'db.php';
// $tb=$db->logindata;
$unlike=$db->post->findone(['_id'=>$v]);
$unlike_update=$unlike['unlike'];
 echo $unlike_update=$unlike_update+1;
$update=$db->post->updateOne(['_id'=>$v],['$set'=>['unlike'=>$unlike_update]]);
 header("location:link.php?id=$id");

?>