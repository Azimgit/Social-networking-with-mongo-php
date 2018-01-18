<?php

require 'db.php';


// use Zend\Mvc\Controller\AbstractActionController;
// use Zend\View\Model\ViewModel;
// use Mongo;
// use Zend\Session\SaveHandler\MongoDB;
// use Zend\Session\SaveHandler\MongoDBOptions;
// use Zend\Session\SessionManager;
// use Admin\Document\Boutique;
// $t=$db->post;
// $id=$_GET['id'];

// $find=$t->find(['_id'=>new  MongoDB\BSON\ObjectID('$id')] );

// foreach  ($find as $row) {
// 	echo $clg= $row['college'];
// 	echo $id=$row['_id'];}
// 	echo "$clg";
// $update=$t->update(["$id"],['$set'['like':]])

// update({"_id" : ObjectId("58b18d19e4721c06f4003ff7")},{$set:{"name":"abc"}})
?>
<?php
$id=$_POST["v"];
 $v=new MongoDB\BSON\ObjectId($id);
require 'db.php';
// $tb=$db->logindata;
$like=$db->post->findone(['_id'=>$v]);
$like_update=$like['like'];
 echo $like_update=$like_update+1;
$update=$db->post->updateOne(['_id'=>$v],['$set'=>['like'=>$like_update]]);


?>