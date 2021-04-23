<?php 
session_start();

if(isset($_SESSION[faculty_user]))
{
?>
<link rel="stylesheet" href="css/bodystyle.css" />
 <link rel="stylesheet" href="css/image_face.css" />
<form action="lib/faculty.php" method="post" enctype="multipart/form-data">

  <table width="518" height="368" border="1" align="center">
    <tr>
      <td><div align="center">

	  <input type="file" value="Select Profile Picture"  name="faculty_image" id="faculty_image"  />
	  <br /><br />
	  <input type="submit" value="upload" />
	  <a href="faculty_image.php?f_user=<?php echo $_SESSION[faculty_user]; ?>">
	  <input type="button" value="cancel" />
	  </a>
	  <input type="hidden" value="update_faculty" name="act" id="act" />
	  <input type="hidden" value="<?php echo $_SESSION[faculty_user]; ?>" name="faculty_user" />
	  
	  </div></td>
    </tr>
  </table>
</form>
<?php } 
else
header("location:faculty_image.php");
?>
