<?php
include("includes/functions.php");
?>
<div><?php echo $_REQUEST[msg]; ?></div>
<form action="lib/login.php" method="post">
  <table width="531" height="250" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center"><h2>Welcome in password Recovery Module</h2> </div></td>
    </tr>
    <tr>
      <td width="238"><div align="center">User Name : </div></td>
      <td width="277"><label>
        <input type="text" name="login_user" id="login_user" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Security Question : </div></td>
      <td><label>
        <select name="sec_ques" id="sec_ques">
		 <?=get_option_list("secret_ques","sec_id","sec_ques"); ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Your Answer : </div></td>
      <td><label>
        <input type="text" name="sec_ans" id="sec_ans" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        
       <input type="submit" name="Submit" value="Recover Password" />
        <input type="reset" name="reset" value="cancel" />
		<input type="hidden" value="forget_pass" name="act" />

	  </div></td>
    </tr>
  </table>
 </form>