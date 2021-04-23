<?php
session_start();
include("includes/sheader.php");
?>
<link rel="stylesheet" href="css/bodystyle.css" />
<br /><br />
<div style="height:100px; width:100%; border:4px solid red; padding:20px; color:red; background-color:#00FF99;">
<h1><b><?php echo $msg; ?></b></h1></div> 

<br /><br />
<?php
include("includes/sfooter.php");
?>