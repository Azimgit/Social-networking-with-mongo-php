<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script>
function myfun(){
x=<?php echo "hello";?>
	alert(x);
}
</script>
</head>
<body  onload="myfun()">
<?php
require 'db.php';





require 'db.php';

$t=$db->post;
$ext= array("gif","png","jpg","jpeg");
  $id=$_GET['id'];

  $v=new MongoDB\BSON\ObjectId($id);

	$find=$t->find(['_id'=>$v] );
	foreach  ($find as $row) {
	  $clg= $row['college'];
	   $id=$row['_id'];
	   $user1=$row['user'];
	   $name=$row['fname'];
	   $desc=$row["desc"];
    $file=$row["file"];
   echo $on=$row["on"];
    $like=$row["like"];
    $unlike=$row["unlike"];}
  ?>


</body>
</html>


