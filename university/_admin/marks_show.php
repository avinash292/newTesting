<?php include("includes/header.php"); ?>
<?php include("includes/db_connect.php"); ?>
<link rel="stylesheet" href="css/fees_view.css" type="text/css" />
<form action="lib/fees.php" name="fees_view" method="post">
<div style="height:30px; width:100%; border:2px solid black; color:#003399; font-size:28px; padding:15px;" align="center"><b>Student Marking Information </b><a href="student_view.php"></a></div>

<table width="200" border="1">
  <tr>
    <th width="10%"><div align="center">
      <p>Student_Id</p>
    </div></th>
    <th width="9%"><div align="center">
      <p>St_Name</p>
    </div></th>
    <th width="9%"><div align="center">
      <p>St_Father</p>
    </div></th>
    <th width="10%"><div align="center">
      <p>St_Gender</p>
    </div></th>
    <th width="10%"><div align="center">
      <p>St_Course</p>
    </div></th>
    <th width="7%"><div align="center">
      <p>Action</p>
    </div></th>
  </tr>
  <?php
 // $sql="select *from student,fees where student.st_id=fees.st_id";
  $sql="select * from student where st_id in(select st_id from fees where fees_bal='0')";

  $rs=mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
?>
  <tr>
    <td><div align="center"><?php echo $data[st_id]; ?></div></td>
    <td><div align="center"><?php echo $data[st_name]; ?></div></td>
    <td><div align="center"><?php echo $data[st_father]; ?></div></td>
    <td><div align="center"><?php echo $data[st_gen]; ?></div></td>
    <td><div align="center"><?php echo get_value("course","course_id","course_name",$data[st_course]);?></div></td>
    <td><div align="center"><a href="marks_add.php?st_id=<?php echo $data[st_id]; ?>">Give Marks</a></div></td>
  </tr>
  <?php } ?>
  <tr><td colspan="11" > <div align="center">
    <input type="button" id="printbtn" name="printbtn" value="Print" onClick="printout();" />
  </div></td></tr>
</table>
</form>
<div align="right"><a href="marks_details.php">Marks Detail</a></div>
<?php include("includes/footer.php"); ?>