<?php 
include("../includes/db_connect.php");
include("../includes/functions.php");
if($_REQUEST[act])
{
$_REQUEST[act]();
}

function save_marks()
{

$st_id=$_REQUEST[st_id];
$st_course_id=$_REQUEST[st_course_id];
$st_subject_id=$_REQUEST[st_subject_id];

$total_marks=$_REQUEST[sub_marks];
$obtaind_marks=$_REQUEST[marks_obtain];
$practical=$_REQUEST[pract_total];
$total_obtaind=$_REQUEST[marks_total];
$date=$_REQUEST[marks_date];
//echo "$st_id<br>$st_course_id<br>$st_subject_id<br>$total_marks<br>$obtaind_marks<br>$practical<br>$total_obtaind<br>$date";


$sql="INSERT INTO `university`.`marks`(`st_id` ,`st_course_id` ,`st_subject_id` ,`total_marks` ,`obtained` ,`practical` ,`total_obtained` ,`date`)VALUES ('$st_id', '$st_course_id', '$st_subject_id', '$total_marks', '$obtaind_marks', '$practical', '$total_obtaind', '$date')";
//echo $sql;
$rs=mysql_query($sql);
if($rs)
header("location:../marks_details.php?st_id=$_REQUEST[st_id]");
}
?>