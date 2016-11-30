<!DOCTYPE html>
<html lang="en">
<head>
	<title> Kyle Watson's Portfolio - Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--http://realfavicongenerator.net/ favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#ed81f0">
	<!--this creates validation error due to color attribute but it is needed for safari, no workaround atm-->
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#9f00a7">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#ff5bd1">
	<!--http://realfavicongenerator.net/ favicons -->
	<!--Font Awesome by Dave Gandy - http://fontawesome.io-->
	<!-- <span> tags used for glyphicons (styling) so technically incorrect use of HTML but hidden from accessibility with "aria-hidden=true" attribute-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<header id="branding">
		<h1 class="row col-12">Home</h1>
		<nav id="navigation">
			<h2> Navigation </h2>
			<ul class="row">
				<li class="col-3"><a href="index.php"><span class="fa fa-home" aria-hidden="true"></span> Home </a></li>
				<li class="col-3"><a href="personal.php"><span class="fa fa-user" aria-hidden="true"></span> Personal Bio </a></li>
				<li class="title-nested col-3"><a><span class="fa fa-code" aria-hidden="true"></span> Projects </a>
					<ul class="nested-list">
						<li><a href="projects/project1/"> <abbr title="Universal Serial Bus">USB</abbr> Backup </a></li>
						<li><a href="projects/project2/"> <abbr title="Grand Theft Auto">GTA</abbr> Graphics Fix </a></li>
						<li><a> More Coming Soon! </a></li>
					</ul>
				</li>
				<li class="col-3"><a href="contact.php"><span class="fa fa-address-book" aria-hidden="true"></span> Contact me </a></li>
			</ul>
		</nav>
	</header>
	<!-- Content starts here -->
	<main id="home" tabindex="-1">
		<h2> Introduction </h2>
		<p> This simple portfolio covers a personal profile, as well as academic and personal projects.</p>
	</main>
	<!-- Content ends here -->
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
				<a href="#">Back to the top.</a>
			</p>
		</nav>
	</footer>
</body>
</html>
