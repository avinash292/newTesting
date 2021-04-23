<?php include("includes/header.php");?>
<?php echo $_REQUEST['msg'];?></div><head>
<link rel="stylesheet" href="css/mdetail.css" />
</head>

<form id="form1" name="form1" method="post">

  <table width="702" height="301" border="1" align="center" class="mtable">
    <tr>
      <td colspan="5"><div align="center"><strong>Marks Detail </strong></div></td>
    </tr>
    <?php
$sql="select * from student where st_id in(select DISTINCT(st_id) from marks)";
$rs=mysql_query($sql) or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
?>
    <tr>
      <th width="222"><div align="center">St_id</div></th>
      <td width="233"><div align="center"><?php echo $data[st_id];?></div></td>
     
      <td width="205" rowspan="5"><div align="center"><a href="uploads/<?php echo $data['st_image'];?>"></a><a href="uploads/<?php echo $data['st_image'];?>"><img src="uploads/<?php echo $data['st_image'];?>" height="250" width="250" border="1" style="border-radius:50%;" /></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Name:</strong></div></td>
      <td><div align="center"><?php echo $data[st_name];?></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Father:</strong></div></td>
      <td><div align="center"><?php echo $data[st_father];?></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Course:</strong></div></td>
      <td><div align="center"><?php echo get_value("course","course_id","course_name",$data[st_course]);?></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Gender:</strong></div></td>
      <td><div align="center"><?php echo $data[st_gen];?></div></td>
    </tr>
    <tr>
      <td height="103" colspan="5"><table align="center" class="mtable">
          <tr>
            <th width="86"><div align="center">S.No.</div></th>
            <th width="117"><div align="center">Subject Name </div></th>
            <th width="110"><div align="center">Total</div></th>
            <th width="88"><div align="center">Obtaind</div></th>
            <th width="92"><div align="center">Practical</div></th>
            <th width="210"><div align="center">Action</div></th>
          </tr>
          <?php
		$i=1;		
		$sql1="select * from marks where st_id='$data[st_id]'";
		$rs1=mysql_query($sql1) or die(mysql_error());
		while($data1=mysql_fetch_assoc($rs1))
		{
		?>
          <tr>
            <td height="31"><div align="center"><?php echo $i++;?></td>
            <td><div align="center"><?php echo get_value("subject","subject_id","subject_name",$data1[st_subject_id]);?></td>
            <td><div align="center"><?php echo $data1[total_marks];?></td>
            <td><div align="center"><?php echo $data1[obtained];?></td>
            <td><div align="center"><?php echo $data1[practical];?></td>
            <td><div align="center"><a href="#">Edit</a>||<a href="#">Delete</a></td>
          </tr>
          <?php
		}
		?>
          <tr> </tr>
      </table>
          <p align="right"><input type="button" value="Generate Result" style="height:50px; width:200px" /></p></td>  
    </tr>

    <?php
	}
	?>
  </table>
</form>
<?php include("includes/footer.php");?>



