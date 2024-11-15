<!DOCTYPE html>
<html>
<head>
	<title>College Offered Course | AZGH COLLEGE International School</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="img/logos/azgh_logo.png">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery.mobile-1.4.2.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/crossfade.js"></script>
	<!-- <script type="text/javascript" src="js/footerbottom.js"></script> -->

</head>
<body>


<?php 
	include("includes/sub_banner.php");
	include("includes/banner.php");
?>

<nav id="navbars" class="navbar navbar-default" role="navigation">

	<!-- logo -->
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mainNav">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a href="#" class="navbar-brand animated fadeIn slower"><img src="img/logos/azgh_logo.png" class="img img-responsive"></a>
	</div>

	<!-- menu -->
	<div class="collapse navbar-collapse animated flash" id="mainNav">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index"><b>Home</b></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>About</b> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="animated zoomInUp"><a href="mission"><b>Mission</b></a></li>
					<li class="animated zoomInDown"><a href="vision"><b>Vision</b></a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Offered Courses</b> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active animated zoomIn"><a href="college"><b>4 yr, 2yr and 1yr Courses</b></a></li>
					<li class="animated zoomIn"><a href="mos"><b>6 Months Courses</b></a></li>
					<li class="animated zoomIn dropdown"><a href="academics"><b>General Academics</b>
					<li class="animated zoomIn dropdown"><a href="tvl"><b>TVL</b>
					<li class="animated zoomIn"><a href="cybernetics"><b>CyberNetics Robotic Rehabilitation</b></a></li>
				</ul>
			</li>
			<li><a href="gallery"><b>Gallery</b></a></li>
			<li><a href="contact"><b>Contact Us</b></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Links</b> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="animated slideInUp"><a href="https://www.youtube.com/channel/UCKi_yBbOJZCbF3Zi9HhFt0A" target="_blank"><b>Cyberdyne</b></a></li>
					<li class="animated slideInUp"><a href="https://www.suzuka-u.ac.jp/english/" target="_blank"><b>Suzuka University</b></a></li>
					<li class="animated slideInUp"><a href="#"><b>AZGH Hospital</b></a></li>
					<li class="animated slideInUp"><a href="#"><b>SUMS Agency</b></a></li>
				</ul>
			</li>
		</ul>
	</div>

</nav>

<?php 
	include("includes/sub_banner.php");
	include("includes/banner.php");
?>

<!-- <?php
	// include("includes/home_slide.php");
?> -->

<div class="container-fluid" id="fouryr_content">
	 <div class="row">
	   <div class="col-md-4 animated slideInLeft slow">
	   <h3 class="text text-center"><b>4 Year Course Offered</b></h3><hr>
	   		<h3 class="text text-center"><b>BS Accountancy</b></h3>
	 		<div id="my_slides" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slides" data-slide-to="0" class="active"></li>
	 				<li data-target="#my_slides" data-slide-to="1"></li>
	 				<li data-target="#my_slides" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bs_accountant.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bs_accountant1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bs_accountant2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#my_slides " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#my_slides" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>
	 		<p class="text text-justify"><b>The Bachelor of Science in <u>Accountancy (BS)</u> prepares students for entry into a variety of fields in accountancy, including corporate accounting, accounting information systems, and governmental accounting.</b></p>
	 		<hr>
	 		<h3 class="text text-center"><b>BS Physical Therapy</b></h3>
	 		<div id="my_slide" class="carousel slide" data-ride="carousel">
	 			
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slide" data-slide-to="0"></li>
	 				<li data-target="#my_slide" data-slide-to="1"></li>
	 				<li data-target="#my_slide" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bs_PT.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bs_PT1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bs_PT2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#my_slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#my_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

	 		</div>

	 		<p class="text text-justify"><b>Bachelor of Science in <u>Physical Therapy (BSPT)</u> is a five year degree program that teaches students the knowledge and skills in the rehabilitation and treatment of individuals with disabilities resulting from injury, illness and aging.</b></p><hr>
	 		<h3 class="text text-center"><b>BS Pyschology</b></h3>
	 		<div class="carousel slide" id="my_slider" data-ride="carousel">
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slider" data-slide-to="0" class="active"></li>
	 				<li data-target="#my_slider" data-slide-to="1"></li>
	 				<li data-target="#my_slider" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bs_psy.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 				<div class="item">
	 					<img src="img/course/bs_psy2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 				<div class="item">
	 					<img src="img/course/bs_psy3.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#my_slider" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#my_slider" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>
	 		<p class="text text-justify"><b>B.S. in <u>Psychology</u> Requires More Science, Math, and <u>Psychology</u> Courses. A Bachelor of Science degree will focus on more science and mathematics courses. ... The BS option involves a stronger concentration on the major area of study and students take more psychology courses than those who are pursuing a BA.</b></p>
	 	</div>
	 	
	 	<div class="col-md-4 animated slideInUp slow">
	 	<h3 class="text text-center"><b>2 Year Course Offered</b></h3><hr>
	 		<h3 class="text text-center"><b>Information Communication Technology</b></h3>
	 		<div class="carousel slide" data-ride="carousel" id="IT_slider">
	 			<ol class="carousel-indicators">
				<li data-target="#IT_slider" data-slide-to="0" class="active"></li>
				<li data-target="#IT_slider" data-slide-to="1"></li>
				<li data-target="#IT_slider" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/ICT.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/ICT1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/ICT2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#IT_slider" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#IT_slider" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>
			<p class="text text-justify"><b>ICT Skills. Studying <u>ICT (Computing Science)</u> at third level means you will develop more advanced skills and knowledge. You will deepen your knowledge of technology and how it works. ... They can undertake these courses, specialise in the area of ICT and gain employment.</b></p><hr>

	 		<h3 class="text text-center"><b>Hotel and Restuarant Services</b></h3>
	 		<div class="carousel slide" data-ride="carousel" id="HRS_slide">
	 			<ol class="carousel-indicators">
				<li data-target="#HRS_slide" data-slide-to="0" class="active"></li>
				<li data-target="#HRS_slide" data-slide-to="1"></li>
				<li data-target="#HRS_slide" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/HRS.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/HRS1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/HRS2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#HRS_slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#HRS_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>
	 		<p class="text text-justify"><b>This course is designed to provide the skills, knowledge and attitude in hotel and restaurant operations, food preparation and service, front and back office operations as well as marketing, financial analysis, accounting, intercultural team dynamics, management and many more.</b></p><hr>

	 		<h3 class="text text-center"><b>Bio-Medical Equipment Technician</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="bmet_slide">
	 			<ol class="carousel-indicators">
				<li data-target="#bmet_slide" data-slide-to="0" class="active"></li>
				<li data-target="#bmet_slide" data-slide-to="1"></li>
				<li data-target="#bmet_slide" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bmet.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bmet1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bmet2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#bmet_slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#bmet_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justify"><b>A biomedical engineering/equipment technician/technologist <i>('BMET')</i> or biomedical engineering/equipment specialist (BES or BMES) is typically an electro-mechanical technician or technologist who ensures that medical equipment is well-maintained, properly configured, and safely functional.</b></p><hr>
	 		
	 		<h3 class="text text-center"><b>Medical Clerk and Office Secretariat</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="mcos_slide">
	 			<ol class="carousel-indicators">
				<li data-target="#mcos_slide" data-slide-to="0" class="active"></li>
				<li data-target="#mcos_slide" data-slide-to="1"></li>
				<li data-target="#mcos_slide" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/mcos.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/mcos1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/mcos2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#mcos_slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#mcos_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justify"><b>Job Description. Perform secretarial duties using specific knowledge of medical terminology and hospital, clinic, or laboratory procedures. Duties may include scheduling appointments, billing patients, and compiling and recording medical charts, reports, and correspondence.</b></p>
	 	</div>

	 	<div class="col-md-4 animated slideInRight slow">
	 		<h3 class="text text-center"><b>1 Year Course Offered</b></h3><hr>
	 		<h3 class="text text-center"><b>International Chef Certification</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="int_chef">
	 			<ol class="carousel-indicators">
				<li data-target="#int_chef" data-slide-to="0" class="active"></li>
				<li data-target="#int_chef" data-slide-to="1"></li>
				<li data-target="#int_chef" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/int_chef.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/int_chef1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/int_chef2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#int_chef" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#int_chef" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justify"><b>The American Culinary Federation (ACF) certifies chefs in 14 areas. If you have an associate's degree, you can take the written and practical exams that lead to the Certified Culinarian (CC) designation. An associate's degree and three years' work experience qualifies you for the Certified Sous Chef (CSC) designation.</b></p><hr>

	 		<h3 class="text text-center"><b>Health Care</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="health_care">
	 			<ol class="carousel-indicators">
				<li data-target="#health_care" data-slide-to="0" class="active"></li>
				<li data-target="#health_care" data-slide-to="1"></li>
				<li data-target="#health_care" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/health_care.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/health_care1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/health_care2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#health_care" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#health_care" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justfiy"><b>Institutional Health Care (Health Care Services) NC II is one of courses offered by the Technical Education and Skills Development Authority, a program that gives you knowledge on how to perform to assist patients of medical institutions like hospitals/ clinics, wellness centers.</b></p><hr>

	 		<h3 class="text text-center"><b>Pharmacy Assistant</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="pharma">
	 			<ol class="carousel-indicators">
				<li data-target="#pharma" data-slide-to="0" class="active"></li>
				<li data-target="#pharma" data-slide-to="1"></li>
				<li data-target="#pharma" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/health_care.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/health_care1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/health_care2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#pharma" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#pharma" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justify"><b>The Pharmacy Assistant course taught at International Career Institute (ICI) provides an opportunity to interact with and learn from highly qualified and experienced professionals. The retail pharmacy is a vital health advisory centre in which graduates play an important role.</b></p>
	 		<h3><b>Emergency Medical Assistant</b></h3>

	 		<div class="carousel slide" data-ride="carousel" id="ema">
	 			<ol class="carousel-indicators">
				<li data-target="#ema" data-slide-to="0" class="active"></li>
				<li data-target="#ema" data-slide-to="1"></li>
				<li data-target="#ema" data-slide-to="2"></li>
			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/EMA.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/EMA1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/EMA2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>

	 			<a href="#ema" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#ema" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	 		</div>

	 		<p class="text text-justify"><b>Emergency medical Assistant, paramedic and ambulance assistant are terms used in some countries to denote a health care provider of emergency medical services. EMTs are clinicians, trained to respond quickly to emergency situations regarding medical issues, traumatic injuries and accident scenes.</b></p>
	 	</div>
	 </div>
</div>


<?php 
	include("includes/footer.php");
?>
<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>

<!-- for control the speed of carousel -->
<script type="text/javascript" src="js/carouselSpeedControl.js"></script>
</body>
</html>