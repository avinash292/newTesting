<?php include("includes/header.php"); ?>
<?php include("includes/db_connect.php"); ?>

<?php
$st_id=$st_id;
//echo $msg;
//echo $st_id;
?>
<link rel="stylesheet" href="css/fees_view.css" type="text/css" />
<form action="lib/fees.php" name="fees_view" method="post">
<div style="height:30px; width:100%; border:2px solid black; color:#003399; font-size:24px; padding-top:10px;" align="center"><b><?php echo $msg; ?> </b><a href="student_view.php"></a></div>

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
    <th width="8%"><div align="center">
      <p>Total Fee </p>
    </div></th>
    <th width="8%"><div align="center">
      <p>Paid Fee </p>
    </div></th>
    <th width="10%"><div align="center">
      <p>Balance Fee </p>
    </div></th>
    <th width="9%"><div align="center">
      <p>Date </p>
    </div></th>
    <th width="10%"><div align="center">
      <p>Description</p>
    </div></th>
    <th width="7%"><div align="center">
      <p>Action</p>
    </div></th>
  </tr>
  <?php
  $sql="select *from student,fees where student.st_id=fees.st_id";
  $rs=mysql_query($sql) or die(mysql_error());
	//$c=mysql_num_rows($rs);
//echo "<div align='center' style='background-color:#99FF99; color:#000066; font-size:22px; height:auto; width:100%; border:2px solid blue; border-top:none; '>Total Number Of Records= $c</p>";
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
<a href="javascript:delete_fees( <?php echo $data[fees_id]; ?>)"><img src='image/delete1.png' height='40' width='40'></a>



</td>
  </tr>
  <?php } ?>
  <tr><td colspan="11" > <div align="center">
    <input type="button" id="printbtn" name="printbtn" value="Print" onClick="printout();" />
  </div></td></tr>
</table>
<input type="hidden" name="act" id="act" />
<input type="hidden" name="fees_id" id="fees_id" />


</form>