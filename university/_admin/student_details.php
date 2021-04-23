<?php include("includes/header.php");

if($_REQUEST[st_id])
		{
		$sql="Select * from student where st_id='$_REQUEST[st_id]'";
		$rs=mysql_query($sql);
		$data=mysql_fetch_assoc($rs);
		}
?>
<link rel="stylesheet" href="css/stu_details.css" type="text/css">

<table width="878" height="361" border="1">
  <tr>
    <td colspan="4"><div align="center" style="font-size:26px; color:#000066;"><div align="center"><strong>Student Details </strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	

<a href='admit_card.php?st_id=<?php echo $data[st_id]; ?>'><input type='button' value='DownLoad Admit Card' style='height:40px; font-size:16px;'/></a>
	
	
	
	
	</div></td>
  </tr>
  <tr>
    <td width="152"><div align="left">Name </div></td>
    <td width="269"><?php echo $data[st_name]; ?></td>
    <td width="169">Father's Name </td>
    <td width="260"><?php echo $data[st_father]; ?></td>
  </tr>
  <tr>
    <td><div align="left">Gender</div></td>
    <td><?php echo $data[st_gen]; ?></td>
    <td>Phone Number </td>
    <td><?php echo $data[st_phone]; ?></td>
  </tr>
  <tr>
    <td><div align="left">Permanent Add. </div></td>
    <td><?php echo $data[st_address1]; ?>;</td>
    <td>Local Address </td>
    <td><?php echo $data[st_address2]; ?>;</td>
  </tr>
  <tr>
    <td><div align="left">Date Of Birth </div></td>
    <td><?php echo $data[st_dob]; ?></td>
    <td>Date Of Addmission </td>
    <td><?php echo $data[st_doa]; ?></td>
  </tr>
  <tr>
    <td><div align="left">E-mail Address </div></td>
    <td><?php echo $data[st_email]; ?></td>
    <td>Course</td>
    <td><?php echo get_value("course","course_id","course_name",$data[st_course]);?></td>
  </tr>
  <tr>
    <td><div align="left">City</div></td>
    <td><?php echo get_value("city", "city_id", "city_name", $data[st_city]); ?></td>
    <td>State</td>
    <td><?php echo get_value("state", "state_id", "state_name", $data[st_state]); ?></td>
  </tr>
  <tr>
    <td><div align="left">Country</div></td>
    <td><?php echo get_value("country", "country_id", "country_name", $data[st_country]); ?></td>
    <td>Qualification</td>
    <td><?php echo get_multi_value("qualification", "qual_id", "qual_name", $data[st_qual]); ?></td>
  </tr>
  <tr>
    <td><div align="left">Image</div></td>
    <td><img src="uploads/<?php echo $data['st_image']; ?>" height="50" width="70" border="1" /></td>
    <td>Pincode</td>
    <td><?php echo $data[st_pincode]; ?></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
     
          <input type="button" name="printbtn" id="printbtn" value="Print" onClick="printout();" />
          
      
    </div></td>
  </tr>
</table>

<?php include("includes/footer.php"); ?>