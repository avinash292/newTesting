<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="css/viewstudentstyle.css" type="text/css" />

<!--------- Plugins Of facebox ------------>
<head>
<script src="plugins/Facebox/facebox/jquery.js" type="text/javascript"></script>
<link href="plugins/Facebox/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="plugins/Facebox/facebox/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox()
	}) 
</script>	</head>
<!--------- Plugins Of facebox ------------>


<?php //include("includes/functions.php"); ?>

<center>
<div align="center" style="background-color:#99FF99; color:#000066; font-size:22px; height:auto; width:100%; padding-top:10px; border:2px solid blue; border-bottom:none;">
<?php echo "<b style='color:red;'>".$_SESSION[login_user]."</b>"; echo " ".$msg; ?>
<!--------- Form For Search Student ------------>
<form action="#" method="post">
<p style=' font-size:18px; color:green;'>
Enter Text To Search: <input type="text" name="st_search"  />
<input type="submit" value="search"  id="submit" />
</p>
</form>
</div>



<form action="lib/student.php" name="student_view" method="post">
<table border="1" bordercolor="#000066">

<tr  align="right">
<th colspan="18">
<a href="javascript:printout()"><abbr title="Click To Print"><img src="image/printer.png"  height="25" width="25" /></abbr></a>
<a href="javascript:delete_all();"><abbr title="Click To Delete All"><img src="image/delete1.png" height="25" width="25" /></abbr></a>

<a href="student_add.php"><abbr title="Click To Add student"><img src="image/add-contact.jpg" height="25px" width="25px" radious="50px" /></abbr></a>
</th>
</tr>
	<tr>
<th><abbr title="Select All"><input type="checkbox" onclick="mark_All(this);" /></abbr></th>
<th>Name  </th>
<th>F Name  </th>
<th>Gender </th>
<th>Phone</th>
<th>L. Address </th>
<th>P. Address </th>
<th>DOB</th>
<th>DOA  </th>
<th>E-mail  </th>
<th>Pincode  </th>
<th>Image  </th>
<th>Your_Action</th>
</center>
</tr>

<?php
if($_REQUEST[st_search])
{
$sql="select * from student where st_name like '$_REQUEST[st_search]%' or st_gen like '$_REQUEST[st_search]%'";
}
else
{
$sql="SELECT *FROM student";
}
$rs=mysql_query($sql) or die(mysql_error());
$c=mysql_num_rows($rs);
echo "<div align='center' style='background-color:#99FF99; color:#000066; font-size:22px; height:auto; width:100%; border:2px solid blue; border-top:none; '>Total Number Of Records= $c</p>";

while($data=mysql_fetch_assoc($rs))
{
?>
<tr>
<td><input type="checkbox" name="st_multi_id[]" value="<?php echo $data['st_id']; ?>" /></td>
<td><?php echo $data['st_name']; ?></td>
<td><?php echo $data['st_father']; ?></td>
<td><?php echo $data['st_gen']; ?></td>
<td><?php echo $data['st_phone']; ?></td>
<td><?php echo $data['st_address1']; ?></td>
<td><?php echo $data['st_address2']; ?></td>
<td><?php echo $data['st_dob']; ?></td>
<td><?php echo $data['st_doa']; ?></td>
<td><?php echo $data['st_email']; ?></td>
<td><?php echo $data['st_pincode']; ?></td>
<td><img src="uploads/<?php echo $data['st_image']; ?>" height="50" width="70" border="1" /></td>


<th> <a href="student_add.php?st_id=<?php echo $data['st_id']; ?> "><abbr title="Click To Edit"> <img src="image/edit.png" height="28" width="28" /></abbr></a>
<a href="javascript:student_delete(<?php echo $data['st_id']; ?>);"><abbr title="Click To Delete"><img src="image/delete1.png" height="28" width="28" /></abbr></a>
<a href="student_details.php?st_id=<?php echo $data['st_id']; ?>" rel="facebox"><abbr title="Click To Show Details"><img src="image/detail.png" height="28" width="28" /></abbr></a>
<a href="fees_add.php?st_id=<?php echo $data[st_id]; ?>" ><abbr title="Click To Pay Fee"> Pay Fee</abbr></a>

</th>
</tr>

<?php } ?>

</table>
<input type="hidden" name="act" id="act" />
<input type="hidden" name="st_id" id="st_id" />
</form>
<?php include("includes/footer.php"); ?>