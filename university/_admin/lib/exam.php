<?php
include("../includes/db_connect.php");
include("../includes/functions.php");
if($_REQUEST[act])
{
//echo $_REQUEST[act];
	$_REQUEST[act]();
}
	function save_exam()
	{
	$R=$_REQUEST;
	if($_REQUEST[exam_id])
	{
	//echo "$_REQUEST[exam_id]";
	$sql="UPDATE  `exam` SET  `exam_title` =  '$R[exam_title]',
`exam_date` =  '$R[exam_date]',
`exam_course` =  '$R[exam_course]',
`exam_subject` =  '$R[exam_subject]',
`exam_time` =  '$R[exam_time]',
`exam_desc` =  '$R[exam_desc]' WHERE  `exam`.`exam_id` =$R[exam_id]";
$rs=mysql_query($sql);
$msg="Recorded is updated";
	}
	else
	{
	$sql="INSERT INTO `exam` (`exam_title` ,`exam_date` ,`exam_course` ,`exam_subject` ,`exam_time` ,`exam_desc`)VALUES (
	'$R[exam_title]', '$R[exam_date]', '$R[exam_course]', '$R[exam_subject]', '$R[exam_time]', '$R[exam_desc]')";
	$rs=mysql_query($sql);
	$msg="Record is  Saved";
	}
	if($rs)
	header("location:../exam_view.php?msg=$msg");
	else
	echo "not";
	}
	
	function exam_delete()
		{
		$exam_id=$_REQUEST[exam_id];
		//echo $fees_id;
		$sql="DELETE FROM exam where exam_id=$exam_id";
		$rs=mysql_query($sql);
		if($rs)
		{
		$msg="Record is deleted";
		header("location:../exam_view.php?msg=$msg");
		}
		else
		echo "error";
		}
	
	

?>