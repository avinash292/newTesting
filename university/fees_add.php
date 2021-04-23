<?php session_start(); ?>
<link  rel="stylesheet" href="css/add_fee_style.css" type="text/css" />
<script src="js/validation.js"></script>
<?php include("includes/sheader.php");?>
<head>
<link type="text/css" href="plugins/calender/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#pay_date").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#pay_date").datepicker({changeMonth: true,changeYear: true});
});
</script>


<?php

if($_REQUEST[st_id])
{
	$sql="select * from student where st_id=$_SESSION[student_user]";
	$rs=mysql_query($sql)or die(mysql_error());
	$data=mysql_fetch_assoc($rs);
	
	$sql1="select * from fees where st_id='$_SESSION[student_user]'";
	$rs1=mysql_query($sql1)or die(mysql_error());
	$data1=mysql_fetch_assoc($rs1);
	
}
?>
	 

<form id="form1" name="form1" method="post" action="lib/fees.php" onsubmit="return validate_fee(this);">
  <table width="588" height="202" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center" style="font-size:36px; color:#000099;">Student Fee Submition Form </div></td>
    </tr>
    <tr>
      <td width="182">Name</td>
      <td width="390"><div align="center">
        <label>
		
      <input type="text" name="st_name" value="<?php echo $data[st_name];?>" readonly="readonly"/>
        </label>
      </div></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><div align="center">
        <input type="text" name="st_course" value="<?php echo  get_value("course","course_id","course_name",$data[st_course]);?>" readonly="readonly" />
      </div></td>
    </tr>
    <tr>
      <td>Total Fee </td>
      <td><div align="center">
        <input type="text" name="st_tfees" value="<?php $t=get_value("course","course_id","course_total_fees",$data[st_course]); echo $t; ?>" readonly="readonly"/>
      </div></td>
    </tr>
    <tr>
	
      <td>Pay Amount </td>
      <td><div align="center">
		<input type="number" name="st_pfees" id="st_pfees" onKeypress="goods='0123456789'; return check_char(event);" min="1" <?php $paid=get_value("fees","st_id","fees_paid",$data[st_id]);
	  if($paid)
	  $bal=get_value("fees","st_id","fees_bal",$data[st_id]);
	  else
	  $bal=$t;
	  ?> max="<?php echo $bal;?>"></td>
		
      </div></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><div align="center">
        <input type="text" name="pay_date" id="pay_date" />
      </div></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><div align="center">
        <textarea name="desc" id="desc"> </textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="save_fees" value="Save Records" id="submit" />
        </label>
        <input type="reset" name="reset" value="Reset" id="reset" />
      </div></td>
    </tr>
  </table>
  <input type="hidden" name="act" value="save_fees"  />
  <input type="hidden" name="st_id" value="<?php echo $data[st_id]; ?>"  />
</form>
<?php echo $_REQUEST[f_id];  ?>

<?php include("includes/sfooter.php");?>