<?php
include("../includes/db_connect.php");
if($_REQUEST[act])
{
	$_REQUEST[act]();
	 
}

function save_student()
{
	$R=$_REQUEST;
	$st_image=$_FILES[st_image][name];
		
	if($st_image)
	{
		$st_arr=explode(".",$st_image);
		$st_image=$st_arr[0].time().".".$st_arr[1];
		move_uploaded_file($_FILES[st_image][tmp_name],"../uploads/".$st_image);
	}
	else
	{
	$st_image=$_REQUEST[st_image];
	}
	$st_qual=implode(",",$R[st_qual]);
	if($R[st_id])
	{
		$sql="UPDATE `student` SET  `st_name`='$R[st_name]',`st_father`='$R[st_father]',`st_gen` =  '$R[st_gen]',`st_phone`='$R[st_phone]',`st_address1`='$R[st_address1]',`st_address2`='$R[st_address2]',`st_course` =  '$R[st_course]',`st_city` =  '$R[st_city]',`st_state` =  '$R[st_state]',`st_country` =  '$R[st_country]',`st_qual` =  '$st_qual',`st_image` =  '$st_image',`st_email` =  '$R[st_email]',`st_pincode` =  '$R[st_pincode]',`st_dob` =  '$R[st_dob]',`st_doa` =  '$R[st_doa]' WHERE `st_id`='$R[st_id]'";
		$msg="Record is Updated!!";
	}
	else
	{
$sql="INSERT INTO `student` (`st_name` ,`st_father` ,`st_address1`,`st_address2` ,`st_gen` ,`st_phone` ,`st_city` ,`st_state` ,`st_country` ,`st_course` ,`st_dob` ,`st_doa` ,`st_email` ,`st_pincode` ,`st_image` ,`st_qual`)
VALUES ('$R[st_name]',  '$R[st_father]',  '$R[st_address1]',  '$R[st_address2]',  '$R[st_gen]',  '$R[st_phone]',  '$R[st_city]',  '$R[st_state]',  '$R[st_country]',  '$R[st_course]',  '$R[st_dob]',  '$R[st_doa]',  '$R[st_email]',  '$R[st_pincode]',  '$st_image',  '$st_qual')";
$msg="Record is Saved!!";
	}
$rs=mysql_query($sql)or die(mysql_error());
if($rs)
header("location:../student_view.php?msg=$msg");
}

###############function for delete########
function delete_student()
{
$sql="select st_image from student where st_id='$_REQUEST[st_id]'";
$rs=mysql_query($sql)or die(mysql_error());
$data=mysql_fetch_assoc($rs);
if($data[st_image])
{
unlink("../uploads/".$data[st_image]);
}
$sql="delete from student where st_id='$_REQUEST[st_id]'";
$rs=mysql_query($sql)or die(mysql_error());
if($rs)
header("location:../student_view.php?msg=Record is Deleted!!");
}

###############function for delete all########
function delete_multi_student()
{
$st_multi_id=$_REQUEST[st_multi_id];
if($st_multi_id==0)
{
header("location:../student_view.php?msg=Plz First Select To Delete The Records...!!");
die;
}
foreach($st_multi_id as $st_id)
{
$sql="select st_image from student where st_id='$st_id'";
$rs=mysql_query($sql)or die(mysql_error());
$data=mysql_fetch_assoc($rs);
if($data[st_image])
{
unlink("../uploads/".$data[st_image]);
}
$sql="delete from student where st_id='$st_id'";
$rs=mysql_query($sql)or die(mysql_error());
}
if($rs)
header("location:../student_view.php?msg=All Selected Records Has Been Deleted!!");
}
?>

