<!DOCTYPE html>
<html lang="en">
<head>
	<title> Kyle Watson's Portfolio - Contact</title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="Portfolio, Student, Developer, GitHub, LinkedIn">
	<meta name="description" content="A simple portfolio to show off projects and attributes.">
	<meta name="author" content="Kyle Watson">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!--Font Awesome by Dave Gandy - http://fontawesome.io-->
	<!-- <i> tags used for glyphicons (styling) so technically incorrect use of HTML but hidden from accessibility with "aria-hidden=true" attribute-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<header id="branding">
		<h1 class="row col-12">Contact Me</h1>
		<nav id="navigation">
			<h2> Navigation </h2>
			<ul class="row">
				<li class="col-3"><a href="index.php"><span class="fa fa-home" aria-hidden="true"></span>  Home </a></li>
				<li class="col-3"><a href="personal.php"><span class="fa fa-user" aria-hidden="true"></span>  Personal Bio </a></li>
				<li class="title-nested col-3"><a href="projects/"><span class="fa fa-code" aria-hidden="true"></span>  Projects </a>
					<ul class="nested-list">
                        <li><a href="https://github.com/kylewatson98/fym-timetable"><abbr title="First Year Matters">FYM</abbr> Timetable</a></li>
                        <li><a href="https://github.com/kylewatson98/BackDefense">BackDefense</a></li>
					</ul>
				</li>
				<li class="col-3"><a href="contact.php"><span class="fa fa-address-book" aria-hidden="true"></span>  Contact me </a></li>
			</ul>
		</nav>
	</header>
	<!-- Content starts here -->
	<main id="contact-me" tabindex="-1">
		<h2> Contact Me </h2>
		<!--<section id="contact-form">
			<h3><span class="fa fa-envelope" aria-hidden="true"></span>  Contact Form</h3>
			<form action="#" enctype="text/plain" method="post">
				<label for="Name">Name: </label><input name="Name" type="text" id="Name" maxlength="256">
				<label for="E-mail">E-mail address: </label><input name="E-mail" type="text" id="E-mail" maxlength="256">
				<label for="Comment">Comment: </label>
				<textarea name="Comment" id="Comment" maxlength="65536"></textarea>
				<input type="submit" name="submit" id="submit" value="Submit">
			</form>
		</section>-->
		<section id="github">
			<h3><span class="fa fa-github" aria-hidden="true"></span>  GitHub</h3>
			<p>
				<a href="https://www.github.com/kylewatson98">www.github.com/kylewatson98</a>
			</p>
		</section>
        <section id="linkedin">
            <h3><span class="fa fa-linkedin-square" aria-hidden="true"></span>  LinkedIn</h3>
            <p>
                <a href="https://www.linkedin.com/in/kylewatson98/">https://www.linkedin.com/in/kylewatson98/</a>
            </p>
        </section>
        <section id="twitter">
            <h3><span class="fa fa-twitter-square" aria-hidden="true"></span>  Twitter</h3>
            <p>
                <a href="https://twitter.com/kylewatson98">https://twitter.com/kylewatson98/</a>
            </p>
        </section>
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
				<a href="#"><span class="fa fa-arrow-circle-up" aria-hidden="true"></span> Back to the top.</a>
			</p>
		</nav>
	</footer>
</body>
</html>