<?php
session_start();
if(isset($_SESSION["user"]))
	header("location:index.php");
?>

<!DOCTYPE html>

<html>
<head>
	<title>login page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div style="border: solid ;height: 1000px;background-color:crimson">

<!--  login div -->
<div  style="border: solid #D3D3D3	; height:130px;width:460px;float: right;margin-top: 10px;margin-right: 0px">
<form method="POST"  style="margin-top:10px;margin-left:70px;">	&nbsp;&nbsp;
Email Id:<input type="email" name="email" autofocus><br><br>
Password:<input type="Password" name="Password">
<input type="submit" name="submit" value="Login"><br>	
<a href="regis.php" style="color: black">New user?Register here.</a><br>
<a href="forgotPassword.php" style="text-decoration: none;color: black">Forgot Password</a>
	
</form>
</div>
<div style="float: left;margin-top: 10px;">
<img src="IMG/coollogo_com-21722821.png"  >
</div>
<img src="IMG/clg.jpg" style="height: 400px;width: 1000px;margin-left: 30px;margin-top: 40px">
</div>




</body>
<?php
require 'db.php';
$table=$db->logindata;

?>
<?php
extract($_POST);
if(isset($submit) )
{

$find=$db->logindata->findOne(['email'=>$email,'Password'=>$Password] );
if($find)
{ 
	
	
	 $_SESSION["user"]=$email;
if(isset($_SESSION["user"]))
 header("location:index.php");
}
else
{	
	
	echo"<script>alert('Invalid Username or Password')</script>";
}

	}

	?>



</html>