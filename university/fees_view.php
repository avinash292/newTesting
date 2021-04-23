<?php session_start(); ?>
<link rel="stylesheet" href="css/fees_view.css" type="text/css" />

<?php include("includes/sheader.php"); ?><br />
<form action="lib/fees.php" name="fees_view" method="post">

<table width="200" border="1">
  <tr>
    <th width="10%"><div align="center">
      Student_Id
    </div></th>
    <th width="9%"><div align="center">
    St_Name
    </div></th>
    <th width="9%"><div align="center">
     St_Father
    </div></th>
    <th width="10%"><div align="center">
     St_Gender
    </div></th>
    <th width="10%"><div align="center">
    St_Course
    </div></th>
    <th width="8%"><div align="center">
     Total Fee 
    </div></th>
    <th width="8%"><div align="center">
     Paid Fee 
    </div></th>
    <th width="10%"><div align="center">
     Balance Fee
    </div></th>
    <th width="9%"><div align="center">
      Date 
    </div></th>
    <th width="10%"><div align="center">
     Description
    </div></th>
    <th width="7%"><div align="center">
     Action
    </div></th>
  </tr>
  <?php
 //   $sql="select *from student,fees where student.st_id=fees.st_id";

  $sql="select *from student,fees where student.st_id=fees.st_id and student.st_id=$_SESSION[student_user]";
  $rs=mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
?>
  <tr>
    <td><?php echo $data[st_id]; ?></td>
    <td><?php echo $data[st_name]; ?></td>
    <td><?php echo $data[st_father]; ?></td>
    <td><?php echo $data[st_gen]; ?></td>
    <td><?php echo $data[st_course]; ?></td>
    <td><?php echo $data[fees_total]; ?></td>
    <td><?php echo $data[fees_paid]; ?></td>
    <td><?php if($data[fees_bal]==0) {echo "<b style='color:green;'>NiL</b>"; } else {echo "<b style='color:red;'>$data[fees_bal] </b>";} ?></td>
    <td><?php echo $data[fees_date]; ?></td>
    <td><?php echo $data[fees_desc]; ?></td>
    <td>
<?php
 if($data[fees_bal]=="0")
 {echo "<img style='border:1px solid black; border-radius:50%;' src='image/complete.png' height='28' width='28'> "; }
 
 else {echo "<a href='fees_add.php?st_id=$data[st_id]'><img src='image/edit.png' height='40' width='40'></a>"; } 
 ?>



</td>
  </tr>
  <?php } ?>
</table>
<input type="hidden" name="act" id="act" />
<input type="hidden" name="fees_id" id="fees_id" />


</form>
<?php include("includes/sfooter.php"); ?><br />

