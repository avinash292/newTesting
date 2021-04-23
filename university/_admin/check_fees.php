<?php
include("includes/db_connect.php");
include("includes/functions.php");

<?php
$total=get_value("fees","fees_id","fees_total",$_REQUEST[st_id]);
$paid=get_value("fees","fees_id","fees_paid",$_REQUEST[st_id]);
//echo $total."<br>";
//echo $paid;
if($total!=$paid)
{
//header("location:fees_veiw.php");
die;
}

?>

?>