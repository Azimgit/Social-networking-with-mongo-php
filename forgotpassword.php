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


<div style="margin-top: 40px;height: auto;width: 300px;margin-left: 200px;border: solid;"><br><br>
<form method="post" action="">
Enter your email:
<input type="email" name=" email"><br>
<label>Enter your favourite city name.<br></label><b>Note:enter same as you entered at the time of Registration </b>
<input type="text" name=" city">
<input type="submit" name="submit">
<a href="login.php" >Goto loginpage</a>
</form>
<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	require 'db.php';
$table=$db->logindata;
	$find=$db->logindata->findOne(['email'=>$email,'city'=>$city] );
	if(!$find)
	{
echo "<script>alert('invalid email_id or answer')</script>";
	}
	else
	{
		$find=$db->logindata->findOne(['email'=>$email,] );
		echo  "your password is".$find['Password'];

	}
}