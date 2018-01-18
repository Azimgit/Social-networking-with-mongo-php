<?php
require 'db.php';

$t=$db->post;


$desc=strlen($_POST["desc"]);


if(isset($_POST["upload"])) {
	error_reporting(0);

	if(($desc==0))
	{
		die("Description  cannot be empty");
	}

	$dir = "uploads/";
	$fname=$_FILES['file']['name'];
$fsize =$_FILES['file']['size'];
$ftype=$_FILES['file']['type'];
	$ftmp =$_FILES['file']['tmp_name'];
 		if(!$ftmp)
 		{
 			die("file not selected");
 		}

$ext= array("gif","png","jpg","jpeg","mp4");


$type = pathinfo($fname,PATHINFO_EXTENSION);

	if(!(in_array($type, $ext)))
{
	die("Error in file type");
}

	move_uploaded_file($ftmp,"upload/".$fname );
	$user=$_POST['User'];

	$find=$db->logindata->find(['email'=>$user] );
	foreach ($find as $row) {
	 $row['college'];
	 $row['fname'];
	 
}
function convertDateTime($unixTime) {
   $dt = new DateTime("@$unixTime");
   return $dt->format('d-m-Y');
}
$time=time();
$on=convertDateTime($time);

$count=0;
$unlike=0;

$desc1=$_POST["desc"];
 
 $name=$row['fname'];
 $clg= $row['college'];
	 $query=(['fname'=>$name,'college'=>$clg,'desc'=>$desc1,'file'=>$fname,'on'=>$on,'like'=>$count,'unlike'=>$unlike,'user'=>$user]);
	 $t->insertone($query);

echo  "File Uploaded successfully";
   
}

?>


