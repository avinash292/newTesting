<?php include("includes/header.php");?>
<form action="lib/marks.php" name="marks_add" id="marks_add" enctype="multipart/form-data" method="post" onsubmit="return validation(this);">
<?php
//echo $_REQUEST[st_id];
if($_REQUEST[st_id])
{
$sql="select * from student where st_id='$_REQUEST[st_id]'";
$rs=mysql_query($sql) or die (mysql_error()); 
$data=mysql_fetch_assoc($rs);

$sql1="select *from exam where exam_course='$data[st_course]'";
$rs1=mysql_query($sql1) or die (mysql_error()); 
$data1=mysql_fetch_assoc($rs1);
}
?>
<link rel="shortcut icon" href="image/glaficon.png" />
<link  rel="stylesheet" href="css/bodystyle.css" type="text/css">
<link rel="stylesheet" href="css/marks_add.css" type="text/css" />
<table width="373" border="1" align="center">
  <tr>
    <td colspan="2"><div align="center"></div><h1> <?php echo $_REQUEST[msg]; ?> </h1><div align="center"></div></td>
    </tr>
  <tr>
    <td width="173"><div align="center">St_ID </div></td>
    <td width="184"><div align="center"><?php echo $data[st_id];?></div></td>
  </tr>
  <tr>
    <td width="173"><div align="center">Name</div></td>
    <td width="184"><div align="center"><?php echo $data[st_name];?></div></td>
  </tr>
  <tr>
    <td><div align="center">Course</div></td>
    <td><label>
      <div align="center">
            <?php echo get_value("course","course_id","course_name",$data[st_course]);?>        </div>
    </label></td>
  </tr>
  <tr>
    <td><div align="center">Subject</div></td>
    <td><div align="center">
	<select name="subject_id" id="subject_id">
           <?php echo get_option_list("subject","subject_course_id","subject_name",$data1[exam_course]);?>
		   </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Obtain Marks</div></td>
    <td><p align="center">
	      <?php $sub_marks=get_value("subject","subject_course_id","subject_marks",$data[st_course]); echo $sub_marks; ?>
	  </p>      <p align="center">
        <input type="number" name="marks_obtain" id="marks_obtain" max="<?php echo $sub_marks; ?>" min="10" />
      </p></td>
	  </tr>
  
  <tr>
    <td><div align="center">Practical Marks</div></td>
    <td><p align="center">
      <?php $pra_marks=get_value("subject","subject_course_id","subject_practical",$data[st_course]); echo $pra_marks; ?>

    </p>
    <p align="center">
      <input type="number" name="pract_total" id="pract_total" max="<?php echo $pra_marks; ?>" min="10"  />
</p></td>
  </tr>
<tr>
		<td><div align="center">Total Obtaind</div></td>
		<td>
		<p align="center">
		<input type="number" name="marks_total" id="marks_tatal" max="<?php echo $sub_marks+$pra_marks; ?>" />
     </p>	 </td>
  </tr>
  
  <tr>
    <td><div align="center">Date</div></td>
    <td><div align="center">
      <input type="date" name="marks_date" id="marks_date" />
    </div></td>
  </tr><tr>
  
    <td colspan="2" align="center"><div align="center">
      <input type="submit" id="submit" name="submit" value="submit" />
    </div></td>
  </tr>
  </table>
  <input type="hidden" name="act" value="save_marks" />
  <input type="hidden" name="st_id" value="<?php echo $data[st_id];?>" />
  <input type="hidden" name="st_course_id" value="<?php echo $data[st_course];?>" />
  <input type="hidden" name="st_subject_id" value="<?php echo $data1[exam_course];?>" />
  <input type="hidden" name="sub_marks" value="<?php echo $sub_marks; ?>" />

</form>

<?php include("includes/footer.php");?>