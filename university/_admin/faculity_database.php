<?php
include("../includes/db_connect.php");

$n=$_REQUEST['f_id'];

$sql="select *from faculty where faculty_user='$n'";
$rs=mysql_query($sql);
if(mysql_num_rows($rs))
{
 $a=1;
}
else
{
  $a=0;
  }
  echo $a;
?>