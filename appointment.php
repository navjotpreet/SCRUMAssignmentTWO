<!DOCTYPE html>
<html> 
<head>
	<title> Unity Hospital | Appointment </title>


		<!-- Web Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
	<div class="wrapper">
	<!--=== Header v1 ===-->
	<div class="header-v1">
	<!-- Topbar -->
	<div class="topbar-v1">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<ul class="list-inline top-v1-contacts">
		<li>
		<i class="fa fa-envelope"></i> Email: unityhospital@gmail.com
		</li>
		<li>
		<i class="fa fa-phone"></i> Contact no : 88666 00555
		</li>
		</ul>
	</div>
	</div>
	</div>
	</div>

<!-- End Topbar -->

				<!-- Navbar -->
				<div class="navbar mega-menu" role="navigation">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="res-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<div class="navbar-brand">
				<a href="index.html">
				<img src="assets/img/logo/unity_white.jpg" alt="Logo">
				</a>
				</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="res-container">
				<ul class="nav navbar-nav">

				<!-- Collect the nav links, forms, and other content for toggling -->


				<!-- Home  -->
				<li class="mega-menu-fullwidth">
				<a href="index.html" >
				HOME
				</a>

				</li>
				<!-- End Home-->

				<!-- About Us -->
				<li class="mega-menu-fullwidth">
				<a href="about.html" >
				ABOUT US
				</a>	
				</li>
				<!-- End About us -->

				<!-- Doctors -->
				<li class="mega-menu-fullwidth">
				<a href="doctors.html" >
				DOCTORS
				</a>

				</li>
				<!-- End Doctors -->


				<!-- Gallery -->
				<li class="mega-menu-fullwidth">
				<a href="gallery.html" >
				GALLERY
				</a>

				</li>
				<!-- End Gallery -->


				<!-- Blog -->
				<li class="mega-menu-fullwidth">
				<a href="blog.html" >
				BLOGS
				</a>	
				</li>
				<!-- End Blog -->

					<!-- Contact Us -->
					<li class="mega-menu-fullwidth">
					<a href="contact.php" >
					CONTACT US
					</a>	
					</li>
					<!-- End Contact us -->
					
					<!-- Appointment -->
					<li class="mega-menu-fullwidth">
					<a href="appointment.php">
					BOOK APPOINTMENT
					</a>

					</li>
					<!-- End Appointment -->

				</ul>

				</div>
				</div>
				</div>
				</div>
				</div>
				<!-- End Navbar -->



	<!--=== Heading ===-->
	<div class="container content">
	<div class="row " style="margin-bottom: 30px;">
	<div class="col-md-9 " style="margin-bottom: 30px;"> 
	<div class="headline"><h2>Book an Appointment</h2></div>

				<!--=== APPOINTMENT FORM ===-->
				<form method="post" class="sky-form sky-changes-3">
				<fieldset>
				<div class="row">
				<section class="col col-6">
				<label class="label">Name</label>
				<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" name="name" id="name" required="">
				</label>
				</section>
				<section class="col col-6">
				<label class="label">E-mail</label>
				<label class="input">
				<i class="icon-append fa fa-envelope-o"></i>
				<input type="email" name="email" id="email" required="">
				</label>
				</section>
				</div>

				<section>
				<label class="label">Purpose Of Appointment</label>
				<label class="input">
				<i class="icon-append fa fa-tag"></i>
				<input type="text" name="appointmentpurpose" required="">
				</label>
				</section>

				<section>
				<label class="label">Mobile Number</label>
				<label class="input">
				<i class="icon-append fa fa-phone"></i>
				<input type="text" name="phone" id="number" required="">
				</label>
				</section> 	

				<section>
				<label class="select">
				<select name="department" required="">
				<option value="" selected="" disabled="">Select Department</option>
				<option value="Cardiology">Cardiology</option>
				<option value="Dermatology and Cosmetology">Dermatology and Cosmetology</option>
				<option value="General Surgery">General Surgery</option>
				<option value="Health Checkup Packages">Health Checkup Packages</option>
				<option value="Neurology">Neurology</option>
				</select>
				<i></i>
				</label>
				</section>
				<div class="row">
				<section class="col col-6">
				<label class="date">Select Date</label>
				<label class="input">
				<i class="icon-append fa fa-calendar"></i>
				<input type="date" name="apdate" required="">
				</label>
				</section>
				<section class="col col-6">
				<label class="time">Select Time</label>
				<label class="select">
				<select name="aptime" required="">
				<option value="" selected="" disabled="">Select Time</option>
				<option value="8 AM - 10 AM">8 AM - 10 AM</option>
				<option value="10 AM - 12 PM">10 AM - 12 PM</option>
				<option value="12 PM - 2 PM">12 PM - 2 PM</option>
				<option value="2 PM - 4 PM">2 PM - 4 PM</option>
				<option value="4 PM - 6 PM">4 PM - 6 PM</option>
				<option value="6 PM - 8 PM">6 PM - 8 PM</option>
				<option value="8 PM - 10 PM">8 PM - 10 PM</option>
				</select>
				<i></i>
				</label>
				</section>
				</div>
				<div class="alert alert-success successBox" id="successbox">
				<button type="button" class="close" onclick="showMsg(1);">×</button>
				<strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> Your Appointment has been booked successfully.</span>
				</div>

				</fieldset>

				<footer>
				<button type="submit" name="subappoint" class="btn-u">Book Now</button>
				</footer>


				</form>
				</div><!--/col-md-9-->

				<!-- side part of appointment -->
						<div class="col-md-3" style="margin-top: 56px;">
						<!-- Address -->
						<div class="headline"><h2>Appointment Notes</h2></div>
						<p> You Only Can Book Your Appointment Between <strong>8 AM to 10 PM.</strong> </p>
						<p> In Other Times You Can Call Our Ambulance Which Is Available 24/7. </p>

						<!-- Business Hours -->
						<div class="headline" style="margin-top: 20px;"><h2>Business Hours</h2></div>
						<ul class="list-unstyled " style="margin-bottom: 30px;">
						<li><strong>Monday-Saturday:</strong> 24/7 Available.</li>
						<li><strong>Sunday:</strong> 4 AM to 11 PM.</li>
						</ul>

						<!-- Why choose us? -->
						<div class="headline"><h2>Why Choose Us?</h2></div>
						<p>All healthcare facilities can be accessed here under one roof, making UNITY Hospital a one point contact for all your healthcare needs.</p>
						<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> 24/7 Ambulance Support.</li>
						<li><i class="fa fa-check color-green"></i> Eminent and Experienced Doctors.</li>
						<li><i class="fa fa-check color-green"></i> Multiple Options For Treatment.</li>
						</ul>
						</div><!--/col-md-3-->
						</div><!--/row-->
						</div><!--/container-->


		<!--=== Footer ===-->
		<div class="footer-v1">
		<div class="footer">
		<div class="container">
		<div class="row">
		<!-- About -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo/unity_white.jpg" alt=""></a>
		<p>At Unity Hospital, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when it comes to healthcare delivery.</p>
		<p>Our mission is to deliver high quality, affordable healthcare services to the broader population in India.</p>
		</div><!--/col-md-3-->
		<!-- End About -->

		<!-- Latest -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="posts">
		<div class="headline"><h2>Latest Posts</h2></div>
		<ul class="list-unstyled latest-list">
		<li>
		<a href="blog.html">Incredible content</a>
		<small>December 16, 2020</small>
		</li>
		<li>
		<a href="gallery.html">Latest Images</a>
		<small>December 16, 2020</small>
		</li>
		<li>
		<a href="terms.html">Terms and Conditions</a>
		<small>December 16, 2020</small>
		</li>
		</ul>
		</div>
		</div><!--/col-md-3-->
		<!-- End Latest -->

		<!-- Link List -->
		<div class="col-md-3 " style="margin-bottom: 40px;">
		<div class="headline"><h2>Useful Links</h2></div>
		<ul class="list-unstyled link-list">
		<li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li>
		<li><a href="contact.php">Contact us</a><i class="fa fa-angle-right"></i></li>
			<li><a href="appointment.php">Book Appointment</a><i class="fa fa-angle-right"></i></li>
		</ul>
		</div><!--/col-md-3-->
		<!-- End Link List -->

		<!-- Address -->
		<div class="col-md-3 map-img " style="margin-bottom: 40px;">
		<div class="headline"><h2>Contact Us</h2></div>
		<address class="" style="margin-bottom: 40px;">
		Unity Hospital <br />
		Ahmedabad, IN <br />
		Phone: 886 666 00555 <br />
		Email: unityhospital@gmail.com 
		</address>
		</div><!--/col-md-3-->
		<!-- End Address -->
		</div>
		</div>
		</div><!--/footer-->

		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2020 &copy; All Rights Reserved.
		<a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a>
		</p>
		</div>

		<!-- Social Links -->
		<div class="col-md-6">
		<ul class="footer-socials list-inline">
		<li>
		<a href="http://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="http://www.skype.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
		<i class="fa fa-skype"></i>
		</a>
		</li>
		<li>
		<a href="http://www.googleplus.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="http://www.linkedin.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
		<i class="fa fa-linkedin"></i>
		</a>
		</li>
		<li>
		<a href="http://www.Pinterest.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
		<i class="fa fa-pinterest"></i>
		</a>
		</li>
		<li>
		<a href="http://www.twitter.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		</ul>
		</div>
		<!-- End Social Links -->
		</div>
		</div>
		</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
</div><!--/wrapper-->

	<!-- Java scripts -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
<?php
 include('connection.php');
 if(isset($_POST['subappoint'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$appointmentpurpose = $_POST['appointmentpurpose'];
	$department = $_POST['department'];
	$apdate = $_POST['apdate'];
	$aptime = $_POST['aptime'];

$sql = "INSERT INTO tb_appointment (name, email, phone, appointment_purpose, department, date, time)
VALUES ('$name', '$email', '$phone', '$appointmentpurpose', '$department', '$apdate', '$aptime' )";

if ($conn->query($sql) === TRUE) {
  echo "<script>$('#successbox').css('display', 'block');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}



?>