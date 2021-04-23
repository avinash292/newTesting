<?php session_start(); ?>
<?php include("includes/db_connect.php"); ?>
<?php include("includes/functions.php"); ?>
<?php if(!isset($_SESSION[faculty_user]))
{
header("location:faculty_add.php");
}
?>
<?php
 $sql="select *from faculty where faculty_user='$_SESSION[faculty_user]'";
 $rs=mysql_query($sql) or die(mysql_error());
 $data=mysql_fetch_assoc($rs);
?>
 <link rel="stylesheet" href="css/bodystyle.css" />
 <link rel="stylesheet" href="css/faculty_detail.css" />

<form id="form1" name="form11" method="post" action=""><br /><br />
<center><div style="height:180; width:180; border-radius:50%;">
<a href="image_downloading.php?f_user=<?php echo $_SESSION[faculty_user]; ?>">
<img src="uploads/<?php echo $data[faculty_image]; ?>" style="height:180; width:180; border:2px solid black; border-radius:50%;" />
</a>
</div>

<br /><br />
		 <table width="400" height="" border="1" align="center">
    <tr>
      <th width="110"><div align="center" style="font-size:24px;"><a href="faculty_add.php?faculty_id=<?php echo $data[faculty_id]; ?>">Edit</a></div></th>
	  
      <th width="140"><div align="center" style="font-size:24px;"><a href="#">Change Password</a></div></th>
	  
      <th width="128"><div align="center" style="font-size:24px;"><a href="lib/logout.php?act=faculty_logout">Logout</a></div></th>
    </tr>
	</table>
  <table width="884" height="210" border="1" align="center">
    <tr>
      <th width="193">Name</th>
      <td width="267"><?php echo $data[faculty_name]; ?></td>
      <th width="156">E-mail</th>
      <td width="240"><?php echo $data[faculty_email]; ?></td>
    </tr>
    <tr>
      <th height="34">Gender</th>
      <td><?php echo $data[faculty_gen]; ?></td>
      <th>Address</th>
      <td><?php echo $data[faculty_add]; ?></td>
    </tr>
    <tr>
      <th>Qualification</th>
      <td><?php echo $data[faculty_qual]; ?></td>
      <th>Contact No. </th>
      <td><?php echo $data[faculty_contact]; ?></td>
    </tr>
    <tr>
      <th height="42">Area Of Interest </th>
      <td><?php echo $data[faculty_interest]; ?></td>
      <th>Post</th>
      <td><?php echo get_value("faculty_post","post_id","post_name",$data[faculty_post]); ?></td>
    </tr>
    <tr>
      <th height="41">Experience</th>
      <td><?php echo $data[faculty_experince]; ?></td>
      <th>User Name </th>
      <td><?php echo $data[faculty_user]; ?></th>
    </tr>
    <tr>
      <td height="41" colspan="4"><div align="center">
        <input name="button"  type="button" value="Print" />
		<a href="lib/logout.php?act=faculty_logout">
        
		</a>
      </div></td>
    </tr>
  </table>
</form>
