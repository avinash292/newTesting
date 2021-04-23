<?php include("includes/header.php"); ?>
<center>
<br />
<?php
 if(isset($_REQUEST['st_id']))
 {
 $id=$_REQUEST['st_id'];
 if($id)
 	{
	$sql="select *from student where st_id='$id'";
	$rs=mysql_query($sql) or die(mysql_error());
	$data=mysql_fetch_assoc($rs);
	}
	}
	
 ?>
 <link rel="stylesheet" href="css/addstudentstyle.css" type="text/css">
<!--  ---------------Use Plugins-----------------  -->

<head>
<link type="text/css" href="plugins/calender/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#st_dob").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#st_doa").datepicker({changeMonth: true,changeYear: true});
});
</script>

  <form action="lib/student.php" name="frm" id="frm" method="post" enctype="multipart/form-data" onsubmit="return valid_student(this);">
    <table width="825" border="1">
      <tr>
        <td height="53" colspan="4" style="font-size:24px; color:#000066;"><div align="center"><strong>Student Registration Form </strong></div></td>
      </tr>
      <tr>
        <td width="233" height="63">Enter Name :- </td>
        <td width="477"><label>
          
          <div align="center">
            <input name="st_name" type="text" id="st_name" value="<?php echo $data[st_name];?>" onKeypress="goods='abcdefghijklmnopqrstuvwxyz '; return check_char(event);" />
            
          </div>
        </label></td>
        <td width="230">Father Name :- </td>
        <td width="332"><label>
          
          <div align="center">
            <input name="st_father" type="text" id="st_father" value="<?php echo $data[st_father];?>" onKeypress="goods='abcdefghijklmnopqrstuvwxyz '; return check_char(event);" />
            
          </div>
        </label></td>
      </tr>
      <tr>
        <td height="52">Gender :- </td>
        <td><label>
         
            <div align="center">
              <input name="st_gen" type="radio" value="Male" <?php if($data['st_gen']=='Male')echo "checked"; ?> />
            Male
            <input name="st_gen" type="radio" value="Female" <?php if($data['st_gen']=='Female')echo "checked"; ?> />
            Female
            </div>
        </label></td>
        <td>Phone Number :- </td>
        <td><label>
          
            <div align="center">
              <input name="st_phone" type="text" id="st_phone" maxlength="10" value="<?php echo $data[st_phone];?>" onKeypress="goods='0123456789'; return check_char(event);" />
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td height="56">Local Address :- </td>
        <td><label>
          
            <div align="center">
              <textarea name="st_address1" id="st_address1">
			<?php echo $data['st_address1'] ;?>
			</textarea>
              
              </div>
        </label></td>
        <td>Permanent Address :- </td>
        <td><label>
        
            <div align="center">
              <textarea name="st_address2" id="st_address2">
			<?php  echo $data['st_address2'] ;?>
			</textarea>
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td height="45">Enter DOB :- </td>
        <td><label>
          
            <div align="center">
              <input name="st_dob" type="text" id="st_dob" value="<?php echo $data['st_dob'];?>" />
              
              </div>
        </label></td>
        <td>Enter DOA :- </td>
        <td><label>
          
            <div align="center">
              <input name="st_doa" type="text" id="st_doa" value="<?php echo $data['st_doa'];?>" />
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td height="48">Enter E-Mail :- </td>
        <td><label>
          
            <div align="center">
              <input name="st_email" type="text" id="st_email "value="<?php echo $data['st_email'];?>" />
              
              </div>
        </label></td>
        <td>Select Course :- </td>
        <td><label>
         
            <div align="center">
              <select name="st_course" id="st_course">
                <?php  echo get_option_list("course","course_id","course_name",$data['st_course']); ?> 
              </select>
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td height="58">Select City :- </td>
        <td><label>
          
            <div align="center">
              <select name="st_city" id="st_city">
                <?php echo get_option_list("city","city_id","city_name",$data['st_city']); ?>
              </select>
              
              </div>
        </label></td>
        <td>Select State :- </td>
        <td><label>
          
            <div align="center">
              <select name="st_state" id="st_state">
                <?php echo get_option_list("state","state_id","state_name",$data['st_state']); ?>
              </select>
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td height="42">Select Country :- </td>
        <td><label>
        <div align="center">
          <select name="st_country">
              <?php echo get_option_list("country","country_id","country_name",$data['st_country']); ?>
          </select>
          
        </div>
        </label></td>
        <td>Qualification :- </td>
        <td><label>
         <div align="center"><?php echo get_check_list("qualification","qual_id","qual_name","st_qual[]",$data['st_qual']); ?>
         </div>
        </label></td>
      </tr>
      <tr>
        <td height="56">Upload Image :- </td>
        <td><label>
         
            <div align="center">
              <input name="st_image" type="file" id="st_image" />
              <img src="uploads/<?php echo $data['st_image']; ?>" height="70" width="50" border="1" />
              
              </div>
        </label></td>
        <td>Pin Code :- </td>
        <td><label>
          
            <div align="center">
              <input name="st_pincode" type="text" id="st_pincode" maxlength="6" value="<?php echo $data[st_pincode];?>" onKeypress="goods='0123456789'; return check_char(event);" />
              
              </div>
        </label></td>
      </tr>
      <tr>
        <td colspan="4"><label></label>
          <label>
          <div align="center">
            <input type="submit" name="Submit" id="submit" value="Submit" />
            <input type="reset" name="Submit2" id="reset" value="Reset" />
          </div>
          </label></td>
      </tr>
	  <input type="hidden" name="act" value="save_student" />
	  <input type="hidden" name="st_id" value="<?php  echo $data['st_id']; ?>" />
	  	  <input type="hidden" name="st_image" value="<?php echo $data['st_image']; ?>" />
    </table>
  </form>
</center>
<?php include("includes/footer.php"); ?>
