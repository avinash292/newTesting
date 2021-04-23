<?php
session_start();
include("../includes/db_connect.php");
if($_REQUEST[act])
{
$_REQUEST[act]();
}
function save_faculty()
{
$R=$_REQUEST;
$faculty_qual=implode(",",$R[faculty_qual]);
	if($_REQUEST[faculty_id])
	{
	//echo "update";
$sql="UPDATE `university`.`faculty` SET `faculty_name` = '$R[faculty_name]',`faculty_email` = '$R[faculty_email]',`faculty_gen` = '$R[faculty_gender]',`faculty_add` = '$R[faculty_address]',`faculty_qual` = '$faculty_qual',`faculty_contact` = '$R[faculty_contact]',`faculty_user` = '$R[faculty_user]',`faculty_interest` = '$R[faculty_interest]',`faculty_pass` = '$R[faculty_pass]',`faculty_cpass` = '$R[faculty_cpass]',`faculty_post` = '$R[faculty_post]',`faculty_experince` = '$R[faculty_experince]',`faculty_ques` = '$R[faculty_ques]',`faculty_ans` = '$R[faculty_ans]',`faculty_image` =' ',`faculty_status` = '0' WHERE `faculty`.`faculty_id` =$_REQUEST[faculty_id]";
	}
	else
	{
	//echo "save";
$sql="INSERT INTO `faculty` (`faculty_name` ,`faculty_email` ,`faculty_gen` ,`faculty_add` ,`faculty_qual` ,`faculty_contact` ,`faculty_user` ,`faculty_interest` ,`faculty_pass` ,`faculty_cpass` ,`faculty_post` ,`faculty_experince` ,`faculty_ques` ,`faculty_ans`,`faculty_image`,`faculty_status`)VALUES ('$R[faculty_name]', '$R[faculty_email]', '$R[faculty_gender]', '$R[faculty_address]', '$faculty_qual', '$R[faculty_contact]', '$R[faculty_user]', '$R[faculty_interest]', '$R[faculty_pass]', '$R[faculty_cpass]', '$R[faculty_post]', '$R[faculty_experince]', '$R[faculty_ques]', '$R[faculty_ans]', ' ',0)";
}

$rs=mysql_query($sql);
$_SESSION[faculty_user]=$_REQUEST[faculty_user];
header("location:../faculty_image.php?f_user=$_SESSION[faculty_user]"); 
}

function update_faculty()
{
$faculty_image=$_FILES[faculty_image][name];
if($faculty_image)
{
		$fac_arr=explode(".",$faculty_image);
		$fac_image=$fac_arr[0].time().".".$fac_arr[1];
		move_uploaded_file($_FILES[faculty_image][tmp_name],"../uploads/".$fac_image);
		$sql="UPDATE `faculty` SET `faculty_image` = '$fac_image' WHERE `faculty_user`='$_SESSION[faculty_user]'";
}
else
{
$sql="UPDATE `faculty` SET `faculty_image`='user.jpg' WHERE `faculty_user`='$_SESSION[faculty_user]'";
}
$rs=mysql_query($sql);
if($rs)
header("location:../faculty_detail.php?$_SESSION[faculty_user]");
else
header("location:../faculty_image.php?$_SESSION[faculty_user]");
}
	function delete_faculty()
	{
	$sql="DELETE FROM `faculty` WHERE `faculty`.`faculty_id` =$_REQUEST[f_id]";
	$rs=mysql_query($sql);
	if($rs)
	header("location:../faculty_view_all.php?msg=Record is Deleted");
	else
	header("location:../faculty_view_all.php?msg=Something Went wrong"); 
	}
	?>