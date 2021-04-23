<?php session_start(); ?>
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

<?php include("includes/sheader.php"); ?>

<center>


<form action="lib/student.php" name="student_view" method="post">
<table border="1" bordercolor="#000066">

<tr  align="right">
<th colspan="18">
</th>
</tr>
	<tr>
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
<th>Print </th>
</tr>

<?php
$sql="SELECT *FROM student where st_id=$_SESSION[student_user]";
$rs=mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($rs);

?>
<tr>
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
<td><img src="_admin/uploads/<?php echo $data['st_image']; ?>" height="50" width="70" border="1" /></td>


<th> 
<a href="javascript:printout()"><abbr title="Click To Print"><img src="image/printer.png"  height="30" width="30" /></abbr></a>&emsp;

</th>
</tr>

</table>
<input type="hidden" name="act" id="act" />
<input type="hidden" name="st_id" id="st_id" />
</form>
<br /><br />
<?php include("includes/sfooter.php"); ?>