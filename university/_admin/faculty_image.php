<?php 
session_start();
include("includes/db_connect.php");
include("includes/functions.php");
 $_SESSION[faculty_user]=$_REQUEST[f_user];
//echo $_SESSION[faculty_id];
 ?>
 <link rel="stylesheet" href="css/bodystyle.css" />
 <link rel="stylesheet" href="css/image_down.css" />
 
<form id="form1" name="form1" method="post" action="">
<center>
<div style="text-align:center;"><br /><br />
<h1>Welcome .....! Thanks For Registration </h1>
<?php
$_SESSION[user_name]=get_value("faculty","faculty_user","faculty_user",$_SESSION[faculty_user]);
$_SESSION[user_password]=get_value("faculty","faculty_user","faculty_pass",$_SESSION[faculty_user]);
?>
<table width="435" height="125" border="1" align="center">
  <tr>
    <th width="184" height="34">User Name : </th>
    <td width="235"><?php echo $_SESSION[user_name]; ?></td>
  </tr>
  <tr>
    <th height="37">Password : </th>
    <td><?php echo $_SESSION[user_password]; ?></td>
  </tr>
  <tr>
    <td height="44" colspan="2"><div align="center"><br />
      <label>
	  <a href="image_downloading.php?<?php echo $_SESSION[faculty_user]; ?>">
	  <input type="button" name="Button" value="Upload Profile Pic" /></a>
	  </form>
	  
	  <form action="lib/faculty.php"  method="post" enctype="multipart/form-data">
      </label>&emsp;
	  <br />
	   <input type="submit" name="submit" value="Skip &gt;&gt;"  /> 
	   <input  type="hidden" value="update_faculty" name="act" id="act" />
	 
	   </form>
    </div></td>
    </tr>
</table>
</div>
</center>

