<?php
include("../includes/db_connect.php");
include("../includes/functions.php");

//echo $_REQUEST[act];
 
	if($_REQUEST[act])
	{
	$_REQUEST[act]();	 
	}
function save_fees()
	{
	$st_id= $_REQUEST[st_id];   //Student Id
	$st_course= $_REQUEST[st_course];   //Student Course
	$date=$_REQUEST[pay_date];   //Dtae
	$descr=$_REQUEST[desc];   //Description
	$total_fee=$_REQUEST[st_tfees]; //Total Fees
	$pay_fee=$_REQUEST[st_pfees];	//Pay Fees
	$paid_fee=get_value("fees","st_id","fees_paid","$st_id");			//Get Paid Fees
	$all_total=$paid_fee+$pay_fee;		//Total Fee Of Student
	if($paid_fee>=$all_total)
	{
	$balance_fee=$all_total-$total_fee;		//Balance Fee
	}
	else
	{
	$balance_fee=$total_fee-$all_total;		//Balance Fee
	}
	
	/*
	echo "Total Fees=$total_fee<br>";
	echo "Paying Fees= $pay_fee<br>";
	echo "Paid Fees = $paid_fee<br>";
	echo "Toatal Fees= $all_total<br>";
	echo "Balance Fees= $balance_fee<br>";
	echo "Date = $date<br>";
	echo "Description = $descr";
	*/
	if($paid_fee)
	{
$sql="update fees set fees_paid='$all_total',fees_bal='$balance_fee',fees_date='$date',fees_desc='$descr' where st_id='$st_id'";
		$msg="Fees Is Updated";
	}
	else
	{	
$sql="INSERT INTO `fees` (`st_id` ,`st_course` ,`fees_total` ,`fees_paid` ,`fees_bal` ,`fees_date` ,`fees_desc`)VALUES ('$st_id','$st_course','$total_fee','$pay_fee','$balance_fee','$date','$descr')";
	$msg="Record is Inserted";
	}
	$rs=mysql_query($sql);
if($rs)
{
header("location:../fees_view.php?msg=$msg");
//header("location:../fees_view.php?st_id=$st_id");
}
}


		function fees_delete()
		{
		$fees_id=$_REQUEST[fees_id];
		//echo $fees_id;
		$sql="DELETE FROM fees where fees_id=$fees_id";
		$rs=mysql_query($sql);
		if($rs)
		{
		$msg="Record is deleted";
		header("location:../fees_view.php?msg=$msg");
		}
		else
		echo "error";
		}
?>