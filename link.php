<?php
include 'header.php';

require 'db.php';

$t=$db->post;
$ext= array("gif","png","jpg","jpeg");
$get=$_GET["id"];
 $v=new MongoDB\BSON\ObjectId($get);

	$find=$t->find(['_id'=>$v] );
	foreach  ($find as $row) {
	 $clg= $row['college'];
	 $id=$row['_id'];
	  $user1=$row['user'];
	   $name=$row['fname'];
	   $desc=$row["desc"];
    $file=$row["file"];
    $on=$row["on"];
    $like=$row["like"];
    $unlike=$row["unlike"];
$type = pathinfo($file,PATHINFO_EXTENSION);}

?>
	

?>
<div   style="border:solid crimson;margin-top: 100px;left:100px;position: absolute; width:auto;">
	
<?php 
 echo "$name  from $clg posted on $on<br>";
 if($type=="mp4"){
 	echo "
<div class='embed-responsive embed-responsive-16by9'><video controls class='video-js embed-responsive-item ' preload='auto'  data-setup='{}'><source src='upload/$file'></video></div></div>";}
else{
 echo "<img src='upload/$file'>";}
 echo "<br><p style='height:auto;'>Description: $desc</P>";
 echo "<input type=hidden  value=$id id='v'>";
 echo "<br><p id=like style='position:relative;top:30px'>$like</p><button  class='like' style='position:relative;left:30px;' ><span class='glyphicon glyphicon-thumbs-up'></span>Like</button>";
 // echo " &nbsp$unlike<button  id='unlike'><span class='glyphicon glyphicon-thumbs-down'></span>Unlike</button>&nbsp ";
 $a="a@gmail.com";
 if(!($user1==$user))
 echo "<a href='chat.php?id=$a' style='left:100px;position:relative;'>chat with user</a>";
?>

//comment

</div>