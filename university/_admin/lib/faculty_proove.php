<?php
include("../includes/db_connect.php");
include("../includes/functions.php");
//echo $_REQUEST[f_id];
 if(isset($_REQUEST[f_id]))
 {
 $f_id=$_REQUEST[f_id];
$status=get_value("faculty","faculty_id","faculty_status",$f_id);
	 if($status==1)
		 {
		 $sql="UPDATE `university`.`faculty` SET `faculty_status` = '0' WHERE `faculty`.`faculty_id` =$f_id";
		  $rs=mysql_query($sql);
		  header("location:../faculty_view_all.php?status=Approve");
		 }
		 else
		 {
		 $sql="UPDATE `university`.`faculty` SET `faculty_status` = '1' WHERE `faculty`.`faculty_id` =$f_id";
		 $rs=mysql_query($sql);
		header("location:../faculty_view_all.php"); 
		 }
		 
}

/*function approve_faculty()
{
//echo $_REQUEST[f_id];
$sql="UPDATE `university`.`faculty` SET `faculty_status` = '1' WHERE `faculty`.`faculty_id` =$_REQUEST[f_id]" ;
$rs=mysql_query($sql);
if($rs)
header("location:../faculty_view_all.php");
else
header("location:../faculty_view_all.php");
} 
*/
 ?>