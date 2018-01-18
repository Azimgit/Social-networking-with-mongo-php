	
<?php
include 'header.php';
?>


<div id="post" class="container">
<?php
require 'db.php';
 // echo "<a href='profile.php'>click here</a>";
$t=$db->post;
$ext= array("gif","png","jpg","jpeg");
 $v=new MongoDB\BSON\ObjectId();
$q=$t->find([]);
foreach($q as $row)
{
$id=$row['_id'];
$fname=$row['fname'];
$file=$row['file'];
$like=$row['like'];
$unlike=$row['unlike'];
$on=$row['on'];
$type = pathinfo($file,PATHINFO_EXTENSION);
if(in_array($type, $ext))
	echo "<div style='position:relative;background-color: #D5DBDB;'><a href='link.php?id=$id'>$fname posted on $on<br> <img src='upload/$file' style='height:100px;width:100px;'></a></div><br>
";
else
	echo "<div style='position:relative;background-color: #D5DBDB;'><a href='link.php?id=$id'>$fname posted on $on<br></a>
<video controls style='width:300px;height:150px;'  class='video-js embed-responsive-item ' preload='auto'  data-setup='{}'><source src='upload/$file'></video></div><br>";
}







?>



	
	
</div>







	





</body>
</html>
<!-- 
// $find=$t->find([] );
// 	foreach  ($find as $row) {
// 	 $clg= $row['college'];
// 	   $name=$row['fname'];
// 	   $desc=$row["desc"];
//     $file=$row["file"];
//     $on=$row["on"];
//     $like=$row["like"];
//     $unlike=$row["unlike"];
// $type = pathinfo($file,PATHINFO_EXTENSION);

// 	 if(in_array($type, $ext))
//  	 { echo "<div>";
//  	 	echo "<a href='link.php'> posted on</a>";
//  	 	echo "<br><img src='upload/$file' id='img'></div>";
//  	 }
//  	 else
//  	 { 	

//  	 	echo " <a href='profile.php'><b>$name</b> posted on  $on</a><br>
// <video width='320' height='240' controls><source src='upload/$file'></video><br>";
//  	 } 
	
 	

// } 

// ?> -->