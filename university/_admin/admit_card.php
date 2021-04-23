<?php
//echo $_REQUEST[st_id];
include("includes/db_connect.php");
include("includes/functions.php");
include("includes/header_admit.php");
?>
<link rel="stylesheet" href="css/admit_card.css" type="text/css" />
<link rel="stylesheet" href="css/bodystyle.css" type="text/css" />

<?php
$sql="select *from student where st_id='$_REQUEST[st_id]'";
$rs=mysql_query($sql);
$data=mysql_fetch_assoc($rs);
?>

<table width="824" height="276" border="1" align="center" class="t1">
  <tr>
    <td colspan="3"><div align="center"><h2>E-Admit Card</h2> </div></td>
  </tr>
  <tr>
    <th width="164"> <div align="center">Id </div></th>
    <td width="344"><div align="center"> <?php echo $data[st_id];?></div></td>
	
    <td width="294" rowspan="5"><div align="center"><strong style="color:red;"><?php echo "Enrollment No :".time(); ?></strong><br />
	<img src="uploads/<?php echo $data[st_image];?>" height="180" width="180" style="border:2px solid black;" />
	</div> <div align="center"></div><div align="center"></div>    
	<div align="center"></div><div align="center"></div></td>
  </tr>
  <tr>
    <th><div align="center">Name </div></th>
    <td><div align="center"><?php echo $data[st_name];?></div></td>
  </tr>
  <tr>
    <th><div align="center">Father Name </div></th>
    <td><div align="center"><?php echo $data[st_father];?></div></td>
  </tr>
  <tr>
    <th><div align="center">Gender</div></th>
    <td><div align="center"><?php echo $data[st_gen];?></div></td>
  </tr>
  <tr>
    <th><div align="center">Course</div></th>
    <td><div align="center"><?php echo get_value("course","course_id","course_name",$data[st_course]); $cid=$data[st_course]; ?></div></td>
  </tr>
</table>
<?php $sid=get_value("exam","exam_course","exam_subject",$data[st_course]);?>
<!--- Time Table , Table -->
<table width="825" height="75" border="none" align="center">
  <tr>
    <th width="81"><div align="center">Serial No. </div></th>
    <th width="129"><div align="center">Sub_Name</div></th>
    <th width="107"><div align="center">Date</div></th>
    <th width="119"><div align="center">Timing</div></th>
  </tr>
  <?php
$i=0;
$sql="select * from exam where exam_course in(select st_course from student where st_id='$_REQUEST[st_id]')";
$rs=mysql_query($sql)or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
$i++;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo get_value("subject","subject_id","subject_name",$data[exam_subject]);?></td>
<td><?php echo $data[exam_date];?>
<td><?php echo $data[exam_time];?></td>
</tr>
<?php
}
?>  
<script src="js/validation.js"></script>
</table>

<table width="200" border="1" align="center">
  <tr><td>
    <h3 align="center"><u>Some Important  Instructions</u></h3>
	<ol><i>
    <li>Please bring your Admit Card and Identity Card in All Examination. </li>
   	<li>You Must sit your Allotted seat only, otherwise you will be Marked Absent.</li>
 	<li>Without admit card you can not enter in the examination hall.</li>
  	<li>Without admit card you can not enter in the examination hall.</li>
	<li>Calculator and other electronics devices are not allowed in the exam.</li>
	<li>Do not copy during your exam.</li></i>
	</ol>
 </td></tr>
  <tr>
  <td><b>SIGNATURE OF EXAMINEE :-</td>
  </tr>
  
  
  <tr>
    <td><div align="center">
      <input name="printbtn" type="button" id="printbtn" value="Print" onClick="printout();" />
    </div></td>
  </tr>
</table>