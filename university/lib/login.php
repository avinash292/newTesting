<?php 
session_start();
include("../includes/db_connect.php");
include("../includes/functions.php");

if($_REQUEST['act'])
{
$_REQUEST['act']();
}


	function student_login()
	{
		$con=mysqli_connect("localhost","root","");
	
	$R=$_REQUEST;
	$sql="select *from student where  st_email='$R[st_email]' and st_name='$R[st_name]'";
	$rs=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($rs);
	
	if(mysqli_num_rows($rs))
	{
	$_SESSION['student_user']=$data['st_id'];
	header("location:../student_view.php?msg=You Are Login Successfully");
	}
	else
	header("location:../login.php?msg=Plz try Again......??");
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