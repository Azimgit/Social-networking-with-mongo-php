<?php

session_start();
$user=$_SESSION["user"];
if(isset($user)==0)
{
	header("location:login.php");
}
 


	
extract($_POST);
if(isset($logout))
{
	session_destroy();
	header("location:login.php");
}
?>
<?php
require 'db.php';
// $tb=$db->logindata;
$img=$db->logindata->findone(['email'=>$user]);
$pic=$img['pic'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>

	<link rel="stylesheet" type="text/css" href="video-js.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle2.css">
		 <script src="ajax.js"></script> 
  <script  src="jform.js" ></script>
     <script  src="video.js" ></script> 
<style type="text/css">
tr{
	border: solid red;
}
	
	#log:after{
		transform: rotate(45deg);
		content: '';
		position: absolute;
		height: 30px;
		width: 30px;
		/*border-left: solid;
		border-top: solid;*/
		top:-10px;
		right:30px;
		z-index: -1;
		background-color: #ECF0F1;
		padding: 20px;

	}
			video::-webkit-media-controls {
    overflow: hidden;
}
video::-webkit-media-controls-enclosure {
    width: calc(100% + 30px);
    margin-left: auto;
}
	
	#profile{
		position: absolute;
		bottom: 10px;

		left:10px;
	}


    #table{
    	border:solid;
    	position: absolute;
    	top: 200px;
    	left: 600px;

    }
#post{
	height: auto;
	
	position: absolute;
	
	left: 100px;
	top: 100px;
	z-index: -1;
	padding: 20px;

	 
}


	#post_alert{
		z-index: 1;
		height: 300px;
		width: 600px;
		position: fixed;
		top: 100px;
		left: 300px;
		/*display: none;*/
		background-color: #F4F6F7;
		border: 1px solid;

	}
 body{
 	background-color: #FBFCFC;
 }
 #data1{
 	height: 300px;
 	width: 200px;
 	border: solid;
 	 }
 	 #togle{
	border-radius:40px;float:right;right: 20px;height:40px; top:10px;	position: fixed;width:40px;
}
 	
 #chatbox{
 	  box-shadow: 0px 0px 20px 0px #888888;
		height:300px;
		width:300px;
		overflow-y: auto;
		position: absolute;
		top:100px;
		border: solid;
		left: 400px;float: left;
 }
</style>
<script type="text/javascript">
	
	$(document).ready(function(){
		var to=$("#to").val();
		var from=$("#from").val();
		var name=$("#name").val();
		var clg=$("#clg").val();


			$(".like").click(function(){
				$(this).css('color','crimson');
				$(this).attr('disabled','disabled');
		var v=$("#v").val();
				
		$.post("like_update.php",{v:v},function(data){

			$("#like").html(data);
		});



	});		

		//alert("to"+to+"\nfrom"+from+"\nname"+name+"\nclg"+clg)
			 $.post("sender.php",{a:to},function(data){
			$("#sender").html(data);
		});	
			  $.post("reciver.php",{a:to},function(data){
			$("#reciver").html(data);

		});
			  
	
	$("#togle").click(function(){
		$("#log").toggle();
	});

		$("#post_alert").hide();

	$("#post_btn").click(function(){
		$("#post_alert").show();
	});
	$("#close").click(function()
	{
		$("#post_alert").hide();});


 $(".progress").hide();


$('#myform').ajaxForm({

		beforeSend:function(e) {
		 
	 var pathArray = $('input[type=file]').val().split('\\');
				 var file=pathArray[pathArray.length - 1];
				 var ext = file.split('.').pop();

				 	if(ext!="mp4")
				 	{
				 		if(ext!="png")
				 			if(ext!="jpg")
				 				{alert("select only image and Mp4 file ");
				 					stopEvent(e);}
				 	}
			$(".progress").show();

	
		},
		uploadProgress:function(e,pos,total,perComplete){
			var file=$("#file").val();
			var desc=$("#desc").val();
			if((!file)||(!desc)){
				$(".progress-bar").width(0+'%');
			}
			else{
			$(".progress-bar").html(perComplete+'%').val(); 
			$(".progress-bar").width(perComplete+'%');}
		},
		success:function(responseText){
			$("#res").html(responseText);
			


		}
		
	});
$("#change").click(function(){
	$("#num").show();
	$("#num1").show();
});
$(".watch").mouseenter(function(){
	$("#post_btn").hide();
});

$("#like").click(function(){
	$("#like").attr("disabled","disabled");

});
	
	$('#send').click(function()
					{
						var t=$('#t').val();
						
						// $("#t").val("");
						// var from=$("#from").val();
						// var to=$("#to").val();
						
							var name=$("#name").val();
		var clg=$("#clg").val();
						$.post("insert.php",{text1:t,to:to,from:from,n:name,clg:clg},function(data){
							// $("#chatbox").html(data);
							$("#t").val("");
							setInterval(function()
 			 { $.post("sender.php",{a:to},function(data){
			$("#sender").html(data);
			
		});
 			 		
 	 },3000);
							
						});
					});
		// $("#send").click(function(){
		// 		var to=$("#to").val();
		// 	$.post("sender.php",{to:to},function(data){

		// 		$("#chatbox").html(data);
		// 	});
			
		// });
setInterval(function()
 			 { $.post("sender.php",{a:to},function(data){
			$("#sender").html(data);
			
		});
 			 		
 	 },3000);
setInterval(function()
 			 { $.post("reciver.php",{a:to},function(data){
			$("#reciver").html(data);

		});
 			 		
 	 },1000);

setInterval(function()
 			 {$('#notification').load('check.php');	
 			 	$('#msg').load('msg.php');
 	 },1000);
	

	


});

</script>


</head>
<body >
<div style="height:70px;background-color: crimson;margin-left: 0px; position: fixed;width:1600px;  ">

<div style="float: left;margin-top: 0px; position: fixed;">
<a href='index.php'><img src="IMG/coollogo_com-21722821.png" width="300px"  ></a><br>
<p id="ptag"></p>

</div>
<form method="get" action="search.php?id=">  
  <div class="input-group" style="width: 500px;margin-left: 310px;top:10px;position: fixed;">
    <input type="text" class="form-control" placeholder="Search people..."  name="id">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div><!-- /input-group -->

      </form>
  <a href="chat.php"><span class="glyphicon glyphicon-envelope"  style="position: fixed;right: 200px;top:30px;"></span></a><b id="notification"  style="position: fixed;right: 190px;top:26px;"></b>
<button class="btn btn-primary " id="post_btn" style="position: fixed;top:10px;right: 100px;height: 30px;text-align: center;">post</button>
<?php  echo "<img src='$pic'  id='togle' >" ?>

 <!-- <hr style="margin-top: 0px;border: solid crimson"> -->
 <div id="log" style="border:1px solid #ECF0F1;height: 100px;width:200px;position:fixed;right: 10px;top:60px;background-color: #ECF0F1;display: none;z-index: 1;">
 <?php  echo "<img src='$pic'  id='togleindiv'>"; ?>
 <a href='profile.php' id='profile'>Profile</a>
 	<form method="POST" id="logform"  >
<input type="submit" name="logout" value="logout"> 
</form>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header("location:login.php");
}
?>
 </div>
</div>

<div id="post_alert" class="alert alert-warning alert-dismissible" role="alert">

  <button type="button"  id="close" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>
 




  <form action="postbar.php" method="post"  id="myform" enctype="multipart/form-data" >
  <b>Description:</b><input type="text" name="desc" id="desc" style="height: 60px;width: 300px;" maxlength="300"><br>Max 300 characters.<br>
<b>video/pic:</b><input type="file"  id="file" name="file" ><br>
<?php echo "<input type='hidden' name='User'  value=$user>";?>
<input type="submit"  class="btn btn-primary" name="upload" value="upload" id="upload">
  </form><br>



<div class="progress   ">
  <div class="progress-bar active progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
    <span class="sr-only">0% Complete</span>
  </div>
</div>



  <div id="res"></div>
</div>
</div><br>
 




	