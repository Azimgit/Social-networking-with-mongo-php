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