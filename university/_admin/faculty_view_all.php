<?php
include("includes/header.php");

?>
<link rel="stylesheet" href="css/viewstudentstyle.css" type="text/css" />
<script src="js/faculty.js"></script>
<div align="center" style="background-color:#99FF99; color:#000066; font-size:22px; height:40; width:100%; padding-top:10px; border:2px solid blue; border-bottom:none;"><?php echo $msg; ?></div>
<table width="100%" height="64" border="1" align="center">
  <tr>
    <th width="216" height="23"><div align="center">Name</div></th>
    <th width="120"><div align="center">Gender</div></th>
    <th width="229"><div align="center">E-Mail Address </div></th>
    <th width="193"><div align="center">Qualification</div></th>
    <th width="164"><div align="center">Contact</div></th>
    <th width="128"><div align="center">Experience</div></th>
    <th width="164"><div align="center">Operations</div></th>
  </tr>
<?php
$sql="select *from faculty";
$rs=mysql_query($sql);
while($data=mysql_fetch_assoc($rs))
{
 ?>
  <tr>
    <td><?php echo $data[faculty_name]; ?></td>
    <td><?php echo $data[faculty_gen]; ?></td>
    <td><?php echo $data[faculty_email]; ?></td>
    <td><?php echo get_multi_value("qualification_faculty", "qual_id", "qual_name", $data[faculty_qual]); ?></td>
    <td><?php echo $data[faculty_contact]; ?></td>
    <td><?php echo $data[faculty_experince]; ?></td>
	<form action="lib/faculty.php" method="post" name="faculty_view_all">
    <td><a href="javascript:faculty_delete(<?php echo $data['faculty_id']; ?>);">Delete</a>||
	
	<?php $f_id=$data['faculty_id']; ?>
	<a href="lib/faculty_proove.php?f_id=<?php echo $data['faculty_id']; ?>"><?php if($data['faculty_status']=='1'){echo "DisApprove";} else{echo "Approve";}?></a>

  <?php } ?>
</table>
<input type="hidden" value="act"  name="act" id="act" />
<input type="hidden" name="f_id" id="f_id" />
</form>
<?php include("includes/footer.php"); ?>