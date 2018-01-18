<?php
require 'db.php';

$table=$db->logindata;
$mail=$_POST['email'];
if($mail=="")
	die("enter mail_id");

$find=$table->findone( ['email'=>$mail]);

if(!$find)
	echo "valid email_id";
else
	echo "id already exist";
	


?>