<?php include("includes/header.php"); ?>
<link rel="stylesheet" href="css/exam_add.css" type="text/css" />

<script src="js/validation.js"></script>

<head>
<link type="text/css" href="plugins/calender/css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="plugins/calendar/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="plugins/calendar/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#exam_date").datepicker({changeMonth: true,changeYear: true,startYear:1900,EndYear:2000});
$("#st_doa").datepicker({changeMonth: true,changeYear: true});
});
</script>

<script>

var xmlhttp;
function subject(obj)
{
  if(window.XMLHttpRequest)
  {
   xmlhttp=new XMLHttpRequest();
  }
 else
 {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 } 
 
 xmlhttp.onreadystatechange=function()
  {
   if(xmlhttp.readyState==4 && xmlhttp.status==200)
   document.getElementById("exam_subject").innerHTML=xmlhttp.responseText;
 };
 xmlhttp.open("get","ajax_db.php?q="+obj,true);
 xmlhttp.send();
}
</script>
</head>

<?php 
if($_REQUEST[exam_id])
{
//echo "exam id".$_REQUEST[exam_id];
$sql="select * from exam where exam_id='$_REQUEST[exam_id]'";
$rs=mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_assoc($rs);
}
	?>
	


<form id="exam_add" name="exam_add" method="post" action="lib/exam.php" enctype="multipart/form-data" onsubmit="return validate_exam(this);">
  <table width="874" border="1" align="center">
    <tr>
      <td height="62" colspan="4"><div align="center"> <h2>Student Examination Form </h2></div></td>
    </tr>
    <tr>
      <td width="208" height="40"><div align="center">Exam Title </div></td>
      <td width="238"><div align="center">
        <label>
        <input type="text" name="exam_title"  id="exam_title" onKeypress="goods='abcdefghijklmnopqrstuvwxyz '; return check_char(event)"; value="<?php echo $data[exam_title]; ?>" />
        </label>
      </div></td>
      <td width="193"><div align="center">Exam Date </div></td>
      <td width="207"><div align="center">
        <label></label>
        <input type="text" name="exam_date" id="exam_date" value="<?php echo $data[exam_date]; ?>" />
      </div></td>
    </tr>
    <tr>
      <td height="49"><div align="center">Exam Course </div></td>
      <td><div align="center">
        <label></label>
        <label>
        <select name="exam_course" id="exam_course" onchange="subject(this.value);">
          <?php  echo get_option_list("course","course_id","course_name",$data['st_course']); ?> 
        </select>
        </label>
</div></td>
      <td><div align="center">Exam Subject </div></td>
      <td><div align="center">
        <label>        </label>
      <div align="center">
        <label></label>
        <select name="exam_subject" id="exam_subject">
         
        </select>
      </div></div></td>
    </tr>
    <tr>
      <td height="57"><div align="center">Exam Timing</div></td>
      <td><div align="center">
        <label>
        <div align="left">
          <input name="exam_time" id="exam_time" type="radio" value="Morning(10:00AM to 01:00PM)" <?php if($data['exam_time']=='Morning(10:00AM to 01:00PM)')echo "checked"; ?> />
          Morning(10:00AM to 01:00PM)
          </label>
        </div>
        <p align="left">
          <label>
          <input name="exam_time" id="exam_time" type="radio" value="Evening(02:00PM to 05:00PM)" <?php if($data['exam_time']=='Evening(02:00PM to 05:00PM)') echo "checked"; ?> />
          </label>
          Evening(02:00PM to 05:00PM) </p>
      </div></td>
      <td><div align="center">Exam Description </div></td>
      <td><div align="center">
        <label>
        <textarea name="exam_desc" ><?php echo $data[exam_desc]; ?></textarea>
        </label>
      </div></td>
    </tr>
    <tr>
      <td height="46" colspan="4"><div align="center">
        <label>
        <input type="submit" name="Submit" id="submit" value="Submit" />
        </label>
        <input type="reset" name="reset" id="reset" value="Reset" />
      </div></td>
    </tr>
  </table>
   
   <input type="hidden" name="exam_id" value="<?php echo $data[exam_id];?>">
  <input type="hidden" name="act" value="save_exam" />
<a href="exam_view.php"><p align="right" style="font-size:24px; color:#FF0000;">Exam view</p></a>
</form>




<?php include("includes/footer.php"); ?>