<?php session_start();
	if($_SESSION[student_user]=="")
	{
	header("location:login.php?msg=Plz Login First To Continue.....!!!!");
	die;
	}
	?>


<script src="js/validation.js"></script>
<?php include("db_connect.php"); ?>
<?php include("functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>student-uni</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
<style>
body,td,tr
{
color:black;
padding:10px;
text-align:center;
}
</style>

</head>
<body>

<div class="super_container">
</head>
<body>

<div class="super_container">

	<!-- Header -->
	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>UNIQ</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="student_view.php">home</a></li>
						<li class="main_nav_item"><a href="student_details.php">Details</a></li>
						<li class="main_nav_item"><a href="lib/check_fees.php">Admit Card</a></li>
						<li class="main_nav_item"><a href="#">Exam</a></li>
						<li class="main_nav_item"><a href="fees_view.php">Fees</a></li>
						<li class="main_nav_item"><a href="lib/logout.php">Logout</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<span><h2><b>Student Pannel</b></h2></span>
		</div>

	</header>
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Welcome <?php echo 	get_value("student","st_id","st_name",$_SESSION[student_user]);?></h1>
			
		
		</div>
	</div>
	</div>
