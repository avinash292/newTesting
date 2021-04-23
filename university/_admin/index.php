<html>
<head>
<link rel="shortcut icon" href="image/glaficon.png" />
 <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
 <script>
 function user_check()
 {
 //alert();
 if(login_form.login_type.value==0)
	{
		alert("Plz Select Your Type");
		login_form.login_type.focus();
		return false;
	}
 }
 </script>
 <style>
</style>
</head>
<body>
<br><br>

<div style="height:30px; width:auto; padding:10px; border:4px solid white; text-align:center; font-size:28px; color:darkblue;  background-color:lightgreen;">
<?php echo $msg; ?>
</div>
<div id="logform">
 
<span  id="span1">Admin Login</span><br><br>
    <form name="logn_form" id="login_form" method="post"  action="lib/login.php" onSubmit="return user_check(this);">
	<span id="star">*</span>&nbsp;
    
   <input type="text" placeholder="User Name" id="login_user" name="login_user" required><br><br>
   						
						<span id="star">*</span>&nbsp;
  <input type="password" placeholder="Password" id="login_pass" name="login_pass" required><br><br>
  <span id="star">*</span>&nbsp;
  <select name="login_type" id="login_type" class="select">
  <option value="0">Plz Select</option>
  <option value="1">Admin</option> 
  <option value="2">Faculty</option>
  
  </select>
  <br><br>
    <input type="checkbox" value="Remember" id="check" name="check">
	
        <span id="span2">Remember Me</span> &emsp; 
    <input type="submit" value="Login" name="loginbtn"  id="loginbtn">
	
	<input type="hidden" value="check_user" name="act" id="act">
        </form>
        <br>
		<span id="span3"><a id="for" href="faculty_add.php"> Sign New Faculty</a></span>&emsp; 
    <span id="span3"><a id="for" href="forget_pass.php">Forget Password ?</a></span>&emsp;
    </div>
		<br>
	
	<div style="height:30px; width:auto; padding:10px; border:4px solid white; text-align:center; font-size:28px; color:darkblue; background-color:lightgreen; "> UNIQ University</div> 
    </body>
</html>