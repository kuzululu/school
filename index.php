<!DOCTYPE html>
<html lang="en">
<head>
	<title>AZGH COLLEGE International School</title>
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
			<li class="active"><a href="index"><b>Home</b></a></li>
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
					<li class="animated zoomIn"><a href="college"><b>4 yr, 2yr and 1yr Courses</b></a></li>
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
	include("includes/home_slide.php");
?>

<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>

</body>
</html>