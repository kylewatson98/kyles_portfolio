<!DOCTYPE html>
<html lang="en">
<head>
	<title> Kyle Watson's Portfolio - Projects </title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="Portfolio, Student, Developer">
	<meta name="description" content="A simple portfolio to show off projects and attributes.">
	<meta name="author" content="Kyle Watson">
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<!--Font Awesome by Dave Gandy - http://fontawesome.io-->
	<!-- <i> tags used for glyphicons (styling) so technically incorrect use of HTML but hidden from accessibility with "aria-hidden=true" attribute-->
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<header id="branding">
		<h1 class="row col-12">Projects</h1>
		<nav id="navigation">
			<h2> Navigation </h2>
			<ul class="row">
				<li class="col-3"><a href="../index.php"><span class="fa fa-home" aria-hidden="true"></span> Home </a></li>
				<li class="col-3"><a href="../personal.php"><span class="fa fa-user" aria-hidden="true"></span> Personal Bio </a></li>
				<li class="title-nested col-3"><a href="index.php"><span class="fa fa-code" aria-hidden="true"></span> Projects </a>
					<ul class="nested-list">
						<li><a href="https://github.com/kylewatson98/fym-timetable"><abbr title="First Year Matters">FYM</abbr> Timetable</a></li>
						<li><a href="https://github.com/kylewatson98/BackDefense">BackDefense</a></li>
					</ul>
				</li>
				<li class="col-3"><a href="../contact.php"><span class="fa fa-address-book" aria-hidden="true"></span> Contact me </a></li>
			</ul>
		</nav>
	</header>
	<main id="bio" tabindex="-1">
		<!-- Content starts here -->
		<section id="proj1">
			<h3><a href="https://github.com/kylewatson98/fym-timetable"><abbr title="First Year Matters">FYM</abbr> Timetable</a></h3>
			<p>
                A simple timetabling app to make it easier for University of Salford
                computing students to read the timetable hosted on http://firstyearmatters.info/new/timetables.html
			</p>
		</section>
		<section id="proj2">
			<h3><a href="https://github.com/kylewatson98/BackDefense">BackDefense</a></h3>
			<p>
                Unity Tower-Defense game; but you have to fight against your own creation.
			</p>
		</section>
		<!-- Content ends here -->
	</main>
	<footer id="contact">
		<address>
			Created by some <a href="mailto:k.j.watson1@edu.salford.ac.uk">guy.</a>
		</address>
		<p>
			<?php
				echo "Last Modified: " . date("d/m/y H:m",filemtime(__FILE__));
			?>
		</p>
		<nav id="bottom-nav">
			<p>
				<a href="#"><span class="fa fa-arrow-circle-up" aria-hidden="true"></span> Back to the top.</a>
			</p>
		</nav>
	</footer>
</body>
</html>
