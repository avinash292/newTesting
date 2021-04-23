<?php session_start();
	if($_SESSION[login_user]=="")
	{
	header("location:index.php?msg=Plz Login First To Continue.....!!!!");
	die;
	}
	?>
	<?php
include("db_connect.php");
include("functions.php"); 
?>

<html>
<head><title>
</title>
<link rel="shortcut icon" href="image/glaficon.png" />
<link  rel="stylesheet" href="css/bodystyle.css" type="text/css">
<script src="js/validation.js"></script>
<style>
a
{
text-decoration:none;
}
</style>
</head>

<body>
<div style="border:2px solid red; background-color:#99FF99;">
<center>
<table width="100%" border="1">
  <tr>
    <td width="300" height="44" id="header"><div align="center">
	<a href="student_view.php"><strong>HOME</strong></a></div></td>
	
    <td width="300"><div align="center">
	<a href="fees_view.php"><strong>FEES</strong></a></div></td>
	
    <td width="300"><div align="center">
        <a  href="student_view.php"><strong>STUDENT</strong></a></div></td>
		
	<td width="300"><div align="center">
        <a  href="gallery.php"><strong>PICTURES</strong></a></div></td>
		
	<td width="300"><div align="center">
        <a  href="exam_add.php"><strong>EXAM</strong></a></div></td>
		
	<td width="300"><div align="center">
        <a  href="marks_show.php"><strong>MARKS</strong></a></div></td>
	
	<td width="300"><div align="center">
	<a href="faculty_request.php?msg=Requested Faculties"><strong>Faculty_R</strong></a></div></td>
<td width="300"><div align="center">
	<a href="faculty_view_all.php?msg=All Faculty"><strong>Faculty_V</strong></a></div></td>
	
	<td width="300"><div align="center">
	<a href="lib/logout.php?act=admin_logout"><strong>LOGOUT</strong></a></div></td>
  </tr>
</table>
</div>
<abbr title="University Image">
 <img src="image/img5.jpg" style="height:350px; width:100%; position:inherit;" /></abbr>
</center>
