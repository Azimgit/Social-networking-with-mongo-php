<?php
include 'header.php';
$n=$db->logindata->findone(['email'=>$user]);
$name=$n['fname'];
$clg=$n['college'];

$to=$_GET['id'];






?>
<p style=" position: absolute;left:0px;top: 76px; width: 100px;" ><b>chat history</b></p> 
<div style="border: solid ; position: absolute;left:0px;top: 100px;height: 200px; width: 100px;" id='msg'> <br></div><div  style=" position: absolute;right:100px;top: 100px;height: 100px; width: 100px;z-index: -1;" >
	<?php 

	$n=$db->logindata->findone(['email'=>$to]);
	$rec=$n['fname'];
	$img=$n['pic'];
	$cl=$n['college'];
	echo "Hi<b>".$name."</b>you are chatting  with <b>".$rec."</b>from $cl<br><img src='$img'> ";?>
</div>
<div id='chatbox'>
<p id='sender'></p>
<p id='reciver'  style="border:  ;float: right;position: absolute;right: 0px;"><br></p>
<?php 
  
// $q="select * from chat where from_='$user' AND to_='$to'";
// $run=$mysqli->query($q);
// 	while($row=$run->fetch_array())
// 		echo "<p style='font-size:10px;border:solid yellow;width:100px;float:left;position:absolute;left:0px;'>you<br>". $row['msg']."</p><br><br>";


	?>






</div>
<div style="border-top:0px;position: absolute;left:400px;top:400px;width:300px;height: 40px;border-bottom: solid;border-left: solid;border-right: solid;">
	<hr style="position: absolute;bottom: 10px;border:2px solid crimson;width: 290px;">
	<input type="hidden" value="<?php echo $user?>" id="from">
	<input type="hidden" value="<?php echo $name?>" id="name">
	<input type="hidden" value="<?php echo $clg?>" id="clg">

	<input type="hidden" value="<?php echo $to; ?>" id="to">
	<input type="text" name="send"  id="t" required="" style="position: absolute;bottom: 0px;float: left;left:0px">
	<input type="submit" name="send"  autofocus="" value="send" style="position: absolute;bottom: 0px;right: 100px;" id="send">
</div>
<!-- $q="select * from chat where from_='$user'";
	$run=$mysqli->query($q);
	while($row=$run->fetch_array())
echo "<p style='font-size:10px;border:solid blue;width:100px;float:left;position:absolute;'>you<br>".$row['msg']."</p><br><br>"; -->