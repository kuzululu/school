<!DOCTYPE html>
<html lang="en">
<head>
	<title>6 Mos Courses | AZGH COLLEGE INC</title>
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
					<li class="animated zoomIn"><a href="college"><b>4 yr, 2yr and 1yr Courses</b></a></li>
					<li class="active animated zoomIn"><a href="mos"><b>6 Months Courses</b></a></li>
					
					<li class="animated zoomIn dropdown"><a href="academics"><b>General Academics Strand</b>
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

<div class="container-fluid" id="mos_course">
	<div class="row">
		<div class="col-md-4 animated slideInLeft slow">
			<h2 class="text text-center">Japanese Language</h2>
			<div id="my_slides" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slides" data-slide-to="0" class="active"></li>
	 				<li data-target="#my_slides" data-slide-to="1"></li>
	 				<li data-target="#my_slides" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/jap2.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/jap.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/jap1.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#my_slides " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#my_slides" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>
			<ul class="text text-justify">
				<b><li>Learn Hiragana and Katakana (the Japanese “alphabet”)</li>
				<li>Learn vocabulary (with Kanji) and grammar with help from the either the Complete Guide or the Grammar Guide</li>
				<li>Practice listening, speaking, reading, and writing with material that is interesting to you</li></b>
			</ul>
			<hr>
		</div>
		<div class="col-md-4 animated slideInDown slow">
			<h2 class="text text-center">Cookery</h2>
			
			<div id="my_slider" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slider" data-slide-to="0" class="active"></li>
	 				<li data-target="#my_slider" data-slide-to="1"></li>
	 				<li data-target="#my_slider" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/cook.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/cook1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/cook2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#my_slider " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#my_slider" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>

			<p class="text text-justify"><b>Cooking or cookery is the art, technology, science and craft of preparing food for consumption. Cooking techniques and ingredients vary widely across the world, from grilling food over an open fire to using electric stoves, to baking in various types of ovens, reflecting unique environmental, economic, and cultural traditions and trends. The ways or types of cooking also depend on the skill and type of training an individual cook has. Cooking is done both by people in their own dwellings and by professional cooks and chefs in restaurants and other food establishments.</b></p> <hr>

		</div>
		<div class="col-md-4 animated slideInRight slow">
			<h2 class="text text-center">Bread and Pastry</h2>

			<div id="my_slide" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#my_slide" data-slide-to="0" class="active"></li>
	 				<li data-target="#my_slide" data-slide-to="1"></li>
	 				<li data-target="#my_slide" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bread.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bread2.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bread3.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#my_slide " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#my_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>

			<p class="text text-justify"><b>It's used as a base or covering in dishes such as pies. It can also be the name for baked dough products like Danish pastries. It includes the various kinds of baked products which is made from the ingredients such as flour, sugar, milk, butter, shortening, baking powder, and eggs.</b></p> <hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 animated zoomIn slow">
			<h2 class="text text-center">Bartending</h2>
			
			<div id="IT_slider" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#IT_slider" data-slide-to="0" class="active"></li>
	 				<li data-target="#IT_slider" data-slide-to="1"></li>
	 				<li data-target="#IT_slider" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/bar.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bar1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/bar3.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#IT_slider " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#IT_slider" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>

			<p class="text text-justify"><b>Bartending NC II is a short TESDA course that will train you how to prepare, mix, and serve drinks to the patrons of a bar.</b></p>
			<p><b>Among the things you will learn from taking this course are sorting and storing bar tools and glassware, conducting inventories, writing written reports and requests, classifying and differentiating the different types of alcoholic and non-alcoholic drinks, interpreting wine labels and terminologies.</b></p>

			<p><b>Other important skills that you may acquire during your training include:</b>
			<ul>
				<b><li>Providing effective customer service</li>
				<li>Operating the bar</li>
				<li>Providing wine service</li>
				<li>Practicing Occupational health and Safety</li>
				<li>Performing basic Computer Operations</li></b>
			</ul>
			</p>
		</div>
		<div class="col-md-4 animated slideInDown slow">
			<h2 class="text text-center">Food and Beverages</h2>

			<div id="HRS_slide" class="carousel slide" data-ride="carousel">
	 				
	 			<ol class="carousel-indicators">
	 				<li data-target="#HRS_slide" data-slide-to="0" class="active"></li>
	 				<li data-target="#HRS_slide" data-slide-to="1"></li>
	 				<li data-target="#HRS_slide" data-slide-to="2"></li>
	 			</ol>

	 			<div class="carousel-inner" role="listbox">
	 				<div class="item active">
	 					<img src="img/course/FandB.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/FandB1.jpg" class="img img-responsive img-thumbnail">
	 				</div>

	 				<div class="item">
	 					<img src="img/course/FandB2.jpg" class="img img-responsive img-thumbnail">
	 				</div>
	 			</div>
	 			<!-- controls -->
			<a href="#HRS_slide " class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#HRS_slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			<!-- end of controls -->
	 		</div>

			<p class="text text-justify"><b>Food and Beverage Services is a process of preparing, presenting and serving of food and beverages to the customers through restaurants, food stalls etc. ... This includes fresh, prepared foods as well as packaged foods, and alcoholic and nonalcoholic drinks or beverage</b></p>
		</div>
	</div>
</div>


<?php include("includes/footer.php");  ?>
 
<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>
<!-- for control the speed of carousel -->
<script type="text/javascript" src="js/carouselSpeedControl.js"></script>
</body>
</html>