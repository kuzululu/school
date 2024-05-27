<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us | AZGH COLLEGE International School </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="img/logos/azgh_logo.png">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery.mobile-1.4.2.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/footerbottom.js"></script>
	<script type="text/javascript" src="js/select.js"></script>
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
					<li class="animated zoomIn"><a href="college"><b>4 yr, 2yr and 1yr Courses</b></a></li>
					<li class="animated zoomIn"><a href="mos"><b>6 Months Courses</b></a></li>
					<li class="animated zoomIn dropdown"><a href="academics"><b>General Academics</b>
					<li class="animated zoomIn dropdown"><a href="tvl"><b>TVL</b>
					<li class="animated zoomIn"><a href="cybernetics"><b>CyberNetics Robotic Rehabilitation</b></a></li>
				</ul>
			</li>
			<li><a href="gallery"><b>Gallery</b></a></li>
			<li  class="active"><a href="contact"><b>Contact Us</b></a></li>
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

<div class="container-fluid" id="contact">
	<div class="row">
	<h2 class="animated slideInUp text text-center text-warning" id="cont_title">Message Us</h2><hr>
		<div class="col-md-6">
			<?php 
				include("includes/map.php");
			?><br>
			<p class="text text-center"><i class="glyphicon glyphicon-phone-alt"></i> 874 6903 <i class="glyphicon glyphicon-road"></i> Las Piñas City <span></span><i class="glyphicon glyphicon-envelope"></i> albertzarate@lifeonecorporation.com</p>
		</div>

		<div class="col-md-6">
			<form name="form" class="form" role="form" method="POST" action="email">
			<input type="hidden" id="hide" name="hide">
				<div class="form-group">
					<label>Name</label>
					<input id="name" name="name" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input id="cont_form" type="text" name="contact" class="form-control" maxlength="11" onkeypress="return numKey(event); "><span id="msg_cont"></span>
				<script type="text/javascript" src="js/number.js"></script>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input id="email" type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<textarea id="message" name="message" class="form-control" rows="6" maxlength="250"></textarea>
					<span id="msg"></span>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary form-control" onclick="return val();" value="Send">
				</div>
				<script type="text/javascript" src="js/textlength.js"></script>
			</form>
			<script type="text/javascript" src="js/validate.js"></script>
			
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
</body>
</html>