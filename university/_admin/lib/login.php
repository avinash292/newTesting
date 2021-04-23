<?php 
session_start();
include("../includes/db_connect.php");
include("../includes/functions.php");
if($_REQUEST[act])
{$_REQUEST[act]();}

$check_type=$_REQUEST[login_type];

	function check_user()
	{
	$R=$_REQUEST;
	$user=md5($R[login_user]);
	$pass=md5($R[login_pass]);
	if($_REQUEST[login_type]==1)
	{
	$sql="select *from login where login_user='$user' and login_pass='$pass' ";
	
	$rs=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs))
	{
	$_SESSION[login_user]=$R[login_user];
	header("location:../student_view.php?msg=You Are Login Successfully");
	}
	else
	header("location:../index.php?msg=Plz try Again......??");
	}
	
	if($_REQUEST[login_type]==2)
	{
	$sql="select *from faculty where  faculty_user='$R[login_user]' and faculty_pass='$R[login_pass]'";
	$rs=mysql_query($sql) or die(mysql_error());
	$data=mysql_fetch_assoc($rs);
	$status=$data[faculty_status];
	if($status==1)
	{
	if(mysql_num_rows($rs))
	{
	$_SESSION[faculty_user]=$R[login_user];
	header("location:../faculty_detail.php?msg=You Are Login Successfully");
	}
	else
	header("location:../index.php?msg=Plz try Again1......??");
	}
    else
	header("location:../index.php?msg=You are un authorised Faculty plz contact to Admin........??");
	}
	
	
	
	
	
	}
	///////////////// Function Forget Password //////////////
	function forget_pass()
	{
	//echo $_REQUEST[login_user];
	//echo $_REQUEST[sec_ques];
	//echo $_REQUEST[sec_ans];
	
	$R=$_REQUEST;
	$user=md5($R[login_user]);
	//echo $user;
	//$log=get_value("login","login_user","login_id",$user);
	
	if(get_value("login","login_user","login_id",$user))
	{
	$sql="select *from login where sec_ques_id='$R[sec_ques]' and sec_ans='$R[sec_ans]' and login_user='$user'";
	$rs=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs))
		{
		$_SESSION[login_user]=$R[login_user];
		header("location:../student_view.php");
		}
	else
	header("location:../forget_pass.php?msg=some information is wrong");
	}
	
	else
	{
	header("location:../forget_pass.php?msg=This user is not exist...");
	}
}	
	
	?>