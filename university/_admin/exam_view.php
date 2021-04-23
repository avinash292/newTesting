<?php include("includes/header.php"); ?>
<link rel="stylesheet" href="css/exam_view.css" type="text/css"  />

<?php include("includes/db_connect.php"); ?>



<form id="exam_view" name="exam_view" method="post" action="lib/exam.php">
<div style="height:30px; width:100%; border:2px solid red; color:#003399; font-size:24px; padding-top:10px;" align="center"><b><?php echo $msg; ?> </b><a href="student_view.php"></a></div>

  <table width="100%" height="137" border="1" align="center">
 
    <tr>
      <td height="41" colspan="7"><div align="center"><h2>Student Exam Details</h2> </div></td>
    </tr>
    <tr>
      <th width="163" height="41"><div align="center">Exam Title </div></th>
      <th width="152"><div align="center">Exam Date </div></th>
      <th width="152"><div align="center">Exam Subject </div></th>
      <th width="148"><div align="center">Exam Course </div></th>
      <th width="252"><div align="center">Exam Timing </div></th>
      <th width="286"><div align="center">Exam Description </div></th>
      <th width="118"><div align="center">Action</div></th>
    </tr>
	<?php
$sql="select * from exam order by exam_id desc";
$rs=mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
?>
    <tr align="center">
      <td height="45"><?php echo $data[exam_title]; ?></td>
      <td><?php echo $data[exam_date]; ?></td>
      <td><?php echo get_value("subject","subject_id","subject_name",$data[exam_subject]);?></td>
      <td><?php echo get_value("course","course_id","course_name",$data[exam_course]);?></td>
      <td><?php echo $data[exam_time]; ?></td>
      <td><?php echo $data[exam_desc]; ?></td>
      <td>
	  <a href="exam_add.php?exam_id=<?php echo $data[exam_id]; ?>">Edit</a>
	 <a href="javascript:delete_exam( <?php echo $data[exam_id]; ?>)">Delete</a>
	   </td>
    </tr>
	
	<?php } ?>
  </table>
  <a href="exam_add.php"><p align="right" style="font-size:24px; color:#FF0000;">Exam Add</p></a>
  
  
  
  <input type="hidden" name="act" id="act" />
<input type="hidden" name="exam_id" id="exam_id" />

</form>



<?php include("includes/footer.php"); ?>