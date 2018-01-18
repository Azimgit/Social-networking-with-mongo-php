<?php
include 'header.php';
require 'db.php';
$table=$db->logindata;
$find=$table->find(['email'=>$user] );
	foreach ($find as $row) {
	 $clg=$row['college'];
	 $fname=$row['fname'];
	 $lname=$row['lname'];
	 $branch=$row['branch'];
	 $dob=$row['dob'];
	  $phone=$row['phone'];

	 
}
?>
<table border=2 id="table" >
<th>profile</th>
<tr><td>Fname:</td><td><?php echo $fname; ?></td></tr>
<tr><td>Lname</td><td><?php echo $lname ?></td></tr>
<tr><td>DOB</td><td><?php echo $dob ?></td></tr>
<tr><td>email</td><td><?php echo $user ?><!-- <button id=del>Delete account</button> --></td></tr>
<tr>
	<td>contact</td><td><?php echo $phone ?> <button id="change">change</button> <form action="num.php" method="post" > <input type="number" id="num" placeholder="New number" name="changenum" hidden>
	<input type="hidden" name="id" value=<?php echo $user;?>><input type="submit"  name="change" id="num1" hidden></form></td>
</tr>
<tr><td>college</td><td><?php echo $clg ?></td></tr>
<tr><td>Branch</td><td><?php echo $branch ?></td></tr>
	
</table>