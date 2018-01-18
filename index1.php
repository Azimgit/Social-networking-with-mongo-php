<?php
include 'header.php';
require 'db.php';
 
$t=$db->post;
?>


<div class="container-fluid" style="border: solid; position: absolute;top: 100px;">
<table class="table"><tr  >
<?php
$q=$t->find([]);
$count=1;
foreach($q as $row)
{
$id=$row['_id'];
$fname=$row['fname'];
$file=$row['file'];
$like=$row['like'];
$unlike=$row['unlike'];
$on=$row['on'];


	while ($count<=4) {
		echo "<td ><video class='img-responsive ' style='float:left;' ><source src='upload/$file'></video><br><p>$file</p></td>";
		$count++;
	}
	
	

}






?></tr></table></div>
<br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<div class="container-fluid" style="border: solid; position: absolute;">
<table class="table"><tr  >
<?php
$q=$t->find([]);
$count=1;
foreach($q as $row)
{
$id=$row['_id'];
$fname=$row['fname'];
$file=$row['file'];
$like=$row['like'];
$unlike=$row['unlike'];
$on=$row['on'];


	while ($count<=4) {
		echo "<td ><a href='link.php?id=$id'>$fname posted on $on<br></a><video class='img-responsive ' style='float:left;' ><source src='upload/$file'></video><br><p>$file</p></td>";
		$count++;
	}
	
	

}






?></tr></table></div>
