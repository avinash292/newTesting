<?php include("includes/db_connect.php");
include("includes/functions.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>uniq- Teachers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
<style>
body
{
background-color:#99FF99;
}
table {
		
    border-collapse: collapse;
    width:700px;
	height:200px;
	background-color:#99FF99;
	color:#000000;
}
th, td {
	 padding-top:0px;
	padding-left:10px;
	padding-bottom:0px;
    text-align:left;
	height:50px;
	font-size:18px;
}
#f_img
{
height:300px;
width:300px;
border:5px solid red;
border-radius:50%;
}
</style>
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
					<span>uniq</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="gallery.php">Gallery</a></li>
						<li class="main_nav_item"><a href="courses.php">placement</a></li>
						<li class="main_nav_item"><a href="facility.php">facility</a></li>
						<li class="main_nav_item"><a href="#">About</a></li>
						<li class="main_nav_item"><a href="contact.php">contact us</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+91 9455963581</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/teachers_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Our Faculity</h1>
		</div>
	</div>
	<!-- Teachers -->
    <?php 
	$sql="select *from faculty where faculty_status=1"; 
	$rs=mysql_query($sql);
	while($data=mysql_fetch_assoc($rs))
	{   
    ?>
    <center><hr>
<table align="center">
  <tr>
    <td width="48%"><div align="left"><h1><?php echo $data[faculty_name];?></h1></div></td>
    <td width="42%" rowspan="6"><div align="center">
	<img id="f_img" src="_admin/uploads/<?php echo $data[faculty_image];?>">
	</div></td>
  </tr>
  <tr>
    <td><?php echo get_value("faculty_post","post_id","post_name",$data[faculty_post]);?></td>
  </tr>
  <tr>
  <td>
  <?php echo get_multi_value("qualification_faculty", "qual_id", "qual_name", $data[faculty_qual]); ?>
  </td>
  </tr>
  <tr>
    <td><?php echo $data[faculty_interest];?></td>
  </tr>
  <tr>
    <td><?php echo $data[faculty_contact];?></td>
  </tr>
  <tr>
    <td><?php echo $data[faculty_email];?></td>
  </tr>
  <tr>
    <td><?php echo $data[faculty_add];?></td>
  </tr>
</table>
    </center>
	<?php } ?>
    <!-- Teacher -->
				
	<!-- Milestones -->
<hr>
	<div class="milestones">
		<div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>

		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="750">0</div>
						<div class="milestone_text">Current Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="120">0</div>
						<div class="milestone_text">Certified Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Approved Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
						<div class="milestone_text">Graduate Students</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Become -->

	

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Upcoming Events</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>uniq</span>
							</div>
						</div>

						<p class="footer_about_text">This University is provide the facility to all types of student.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.php">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="courses.php">Courses</a></li>
								<li class="footer_list_item"><a href="gallery.php">Gallery</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Placement</a></li>
								<li class="footer_list_item"><a href="#">Hostal</a></li>
								<li class="footer_list_item"><a href="faculty.html">Faculty</a></li>
								<li class="footer_list_item"><a href="gallery.php">Gallery</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Allahabad Uttar Pradesh India
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
								    +91 9455963581
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>avinashp293@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>All Copyrights © is Reserved ® avinash Mail To avinashp293@gmail.com
                    </span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/teachers_custom.js"></script>

</body>
</html>