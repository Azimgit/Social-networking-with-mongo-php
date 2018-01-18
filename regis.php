<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">

	 <script src="ajax.js"></script> 
  <script  src="jform.js" ></script>
    


	<script >
	$(document).ready(function()
		{
			$('#mail').focusout(function()
					{
						var mail=$('#mail').val();
					
						$("#res").show();
						var here=$("#res").val();
						

						$.post("email_check.php",{email:mail},function(data){
							$('#res').html(data);
							


						});
					}
					);
			$('.fname').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);


				$('.lname').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);

				$('.clg').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);
				$('.branch').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);
		});
</script>
</head>
<body style="background-color: #9EB9D4" >



<img src="IMG/coollogo_com-21722821.png"  >


<div style="margin-top: 40px;height: auto;width: 1000px;margin-left: 200px;border: solid;"><br><br>
	<form method="POST"   align="center" enctype="multipart/form-data">

	<label>Firstname:</label><input type="text" name="fname" id="here" class="fname"   required="" autofocus autocomplete="off">
	<label>Lastname:</label><input type="text" name="lname" class="lname"  required=""><br>
	<br>
<label>&nbsp;E-mail:</label><input type="email" required="" name="mail" id="mail" style="left: 600px" > <font id="res" style="position: absolute;left:870px;top: 220px;width: auto;" color="red" hidden></font><br>


	<br>
	<label>Password:</label><input type="Password" name="Password"  required=""><br><br>
	<label>&nbsp;phone:</label><input type="number" name="phone" maxlength="10"  required="" ><br><br>
	<label>&nbsp;college:</label><input type="text" name="clg" class="clg">
	<br><br>
	<label>&nbsp;Branch:</label><input type="text" name="branch"  class="branch"  required=""><br><br>
	<label>&nbsp;DOB:</label><input type="date" name="dob"  required=""><br><br>
	<label>&nbsp;Securty Question:<br>Which is favourite city?</label><br><input type="text" name="city"  class="branch"  required=""><br><br>
	<label >&nbsp;profile pic:</label><br><br>
	<input type="file" name="pic"  style="float: right;margin-right:300px" accept="image/*" ><br><br>
	<input type="submit" name="regis" value="Register"  >



</div>

<?php
 require 'vendor/autoload.php';

$m=new MongoDB\client;
$db=$m->project;
$table=$db->logindata;

?>
<?php

extract($_POST);

if (isset($regis)) {
	$file=$_FILES['pic']['name'];
	$tmp=$_FILES['pic']['tmp_name'];
	$url="IMG/".$file;
	 move_uploaded_file($tmp, "IMG/".$file);




	





$query=(['fname'=>$fname,'lname'=>$lname,'email'=>$mail,'Password'=>$Password,'phone'=>$phone,'college'=>$clg,'branch'=>$branch,'pic'=>$url,'dob'=>$dob,'city'=>$city,"friend"=>"123"]);
 $table->insertone($query);
 if($table)
 	echo "<script>alert('REgistered')</script>";
  echo "<script	>window.location.href = 'login.php'</script>";
	
}
?>
</body>
</html>