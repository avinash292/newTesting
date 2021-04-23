<?php
session_start();
include("../includes/db_connect.php");
include("../includes/functions.php");
?>
<?php
$sql="select * from fees where st_id=$_SESSION[student_user]";
$rs=mysql_query($sql);
$data=mysql_fetch_assoc($rs);
if($data[fees_total]==$data[fees_paid])
header("location:../admit_card.php");
else
header("location:../fee_msg.php?msg=Plz Complete You Fees Then Download Your Admit Card");
?>
