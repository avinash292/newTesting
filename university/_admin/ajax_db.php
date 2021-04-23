<?php  
include("includes/db_connect.php");
$q=$_REQUEST['q'];
$option="<option value='0'>Plz Select</option>";
$sql="select *from subject where subject_course_id='$q'";


$rs=mysql_query($sql) or die(mysql_error());


 while($data=mysql_fetch_assoc($rs))
 {
  $option.="<option value='$data[subject_id]'>$data[subject_name]</option>";
 }
 echo $option;
?>

