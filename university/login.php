<html>
<head>
 <link rel="stylesheet" href="css/style4.css" type="text/css">
</head>
<center>
<div id="msg"><b>
<?php if(!isset($msg)){echo "Uniq Student Login Pannel"; } else {echo $msg;} ?></b></div><br> 
</center>
<style>

</style>

<div id="click"><a href="index.php"><strong>Click To Home</strong></a></div>


<div id="clickright"><a href="index.php"><strong>Click To Home</strong></a></div>




<div id="whole"><center>
<p>Student Login</p>
<o>You are almost done!One more step.</o><br><br>
<form action="lib/login.php" method="post" enctype="multipart/form-data">
<input type="email" placeholder="stu email ex.avinashp293@" id="st_email" name="st_email" required>
<br><br>
<input type="text" placeholder="student_name" id="st_name" name="st_name" required><br><br>
<input type="submit" value="Login" id="butn" >LOGIN</button> <br><br><br>
<input type="checkbox" id="check">
<h>Remember Me</h>&emsp;&emsp;&emsp;&emsp;&emsp;
<h><a href="#">Forgat Password!</a></h><br><o>_________________</o><br><br>
<h>Login with your Facebook or Twitter account.
</h><br><br>
<button id="btn2">Login with Facebook</button>&nbsp;&nbsp;&nbsp;&nbsp;
<button id="btn3">Login with Twitter</button> <br><br>
<o>Want new account ?</o>&nbsp;&nbsp;&nbsp;&nbsp;
<button id="btn4">SignUp</button>
<input type="hidden" name="act" id="act" value="student_login" />
</form>
</div>
<body>
</body>
</html>