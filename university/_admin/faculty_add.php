<?php 
include("includes/functions.php"); 
include("lib/faculity_ajax.php");
include("includes/db_connect.php");
?>
<?php echo $_SESSION[user_name];?>
<script src="js/faculty.js"></script>
<script src="js/ajax.js"></script>
<link rel="stylesheet" href="css/bodystyle.css" />
<link rel="stylesheet" href="css/addstudentstyle.css" />
<style>
.subtn
{
border:1px solid black;
background-color:#99FF99;
height:30px;
width:150px;
}
.subtn:hover{background-color:#006600;}
</style>
<form id="faculty" name="faculty" method="post" action="lib/faculty.php" onsubmit="return faculty_check(this);">
<br /><br />
<?php 
$f_id=$_REQUEST[faculty_id];
if($f_id)
{
//echo $f_id;
$sql="select *from faculty where faculty_id=$f_id";
$rs=mysql_query($sql);
$data=mysql_fetch_assoc($rs);
}
?>
  <table width="849" height="285" border="1" align="center">
    <tr>
      <td colspan="4"><div align="center"><h1>Faculty Registration </h1></div></td>
    </tr>
    <tr>
      <td width="166">Name</td>
      <td width="252"><label>
        <input type="text" name="faculty_name"  id="faculty_name" value="<?=$data[faculty_name]?>" />
      </label></td>
      <td width="169">E-mail</td>
      <td width="234"><label>
      <input type="email" name="faculty_email" id="faculty_email" value="<?=$data[faculty_email]?>"  />
      </label></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><p>
        <label>
          <input type="radio" name="faculty_gender" value="Male" <?php if($data['faculty_gen']=='Male')echo "checked"; ?>/>
        </label>
        Male<br />
        <label> 
        <input type="radio" name="faculty_gender" value="Female" <?php if($data['faculty_gen']=='Female')echo "checked"; ?>/>
          Female</label>
        <br />
      </p></td>
      <td>Address</td>
      <td><label>
        <textarea name="faculty_address"><?=$data[faculty_add]?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><label>
      <?php echo get_check_list("qualification_faculty","qual_id","qual_name","faculty_qual[]",$data['faculty_qual']); ?>
	  </td>
	        <td>Contact</td>
      <td><label>
      <input type="text" name="faculty_contact" id="faculty_contact" maxlength="10"  value="<?=$data[faculty_contact]?>"/>
      </label></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><label>
      <input type="text" name="faculty_user"   id="faculty_user"   onkeyup="check_user(this.value);" value="<?=$data[faculty_user]?>"/> 
      </label> <span id="sub"></span></td>
	 
      <td>Area of Interest </td>
      <td><input type="text" name="faculty_interest"  id="faculty_interest"  value="<?=$data[faculty_interest]?>"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
      <input type="password" name="faculty_pass" id="faculty_pass" />
      </label></td>
      <td>Confirm Password </td>
      <td><label>
      <input type="password" name="faculty_cpass" id="faculty_cpass" />
      </label></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label>
        <select name="faculty_post">
		<?php  echo get_option_list("faculty_post","post_id","post_name",$data[faculty_post]); ?>
        </select>
      </label></td>
      <td>Experience</td>
      <td><label>
      <input type="text" name="faculty_experince" id="faculty_experince" value="<?=$data[faculty_experince]?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Security Question </td>
      <td><label>
      <select name="faculty_ques">
	  <?php  echo get_option_list("secret_ques","sec_id","sec_ques",0); ?>
      </select>
      </label></td>
      <td>Answer</td>
      <td><label>
      <input type="password" name="faculty_ans"  id="faculty_ans"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <label>
        <input type="submit" name="submit1" id="submit1" value="Next &gt;&gt;"  class="subtn"/>
        </label>
        <input type="submit" name="reset" id="reset" value="Reset" />
		<input  type="hidden"  value="save_faculty" name="act" id="act" />
		<input type="hidden" value="<?php echo $data[faculty_id]; ?>" name="faculty_id" id="faculty_id"  />
      </div></td>
    </tr>
  </table>
</form>
