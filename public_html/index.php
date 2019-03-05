<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Bootstrap JavaScript files -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"
				  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->

		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Custom JavaScript -->

		<script type="text/javascript" src="js/script.js"></script>


		<!-- Animate on Scroll Library -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!-- Social Footer, Colour Matching Icons -->
		<!-- Fork Awesome Stylesheet -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.5/css/fork-awesome.min.css" integrity="sha256-P64qV9gULPHiZTdrS1nM59toStkgjM0dsf5mK/UwBV4=" crossorigin="anonymous">

		<Title>ESL with Hunter</Title>
	</head>
	<body>
<!--	onscroll="debounce(checkSlide)-->
		<nav>
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light text-muted border-muted border-bottom">
					<button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse"
							  data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
							  aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav nav-fill w-100">
							<li class="nav-item active">
								<a class="nav-link text-muted" href="#home">Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item fixed-right">
								<a class="nav-link text-muted" href="#about-me">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-muted" href="#experience">Experience</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-muted" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</nav>

		<div class="container-fluid hero"  id="home">
			<div class="row">
				<h1>ESL<br>with<br>Hunter</h1>
			</div>
		</div>


		<div class="container pt-1" id="about-me">
			<div data-aos="slide-right">
				<div class="img-responsive my-5 rounded-circle">
					<img src="images/portrait.jpg" class="mx-auto d-block"
						  alt="Portrait picture courtesy of Wyatt Salmons" />
				</div>
			</div>
			<div class="container px-3">
				<div data-aos="slide-left">
					<p>Hello! Salut! Thanks for visiting my website.</p>
					<p>My name is Hunter Callaway. I work as a web developer in Albuquerque, New Mexico, but I also teach
						English as a Second Language in person and online. I've learned French to fluency myself, so I know how
						challenging learning a foreign language can be. When we have someone to guide us and keep us motivated,
						however, language learning can be a fun and rewarding experience.</p>
					<p>Whether you're learning English for your career, school, or just for your own enjoyment, I can create
						lesson plans adapted to your needs.</p>
					<p>Check out the following sections for more information about me or to get in touch.</p>
				</div>
			</div>
		</div>

	<div id="experience">
		<div class="container pt-5">
			<div data-aos="slide-right">
				<h2>Experience</h2>
			</div>
		</div>

		<div class="container pb-5">
			<div data-aos="slide-left">
				<div class="row inline-block pb-5" id="verbling">
					<div class="col-sm-6 py-2">
						<img src="images/verbling.png" class="img-fluid mx-auto d-block" alt="Verbling Logo"/>
					</div>
					<div class="col-sm-6 d-flex justify-content-center flex-column text-center">
						<h4>ESL Tutor</h4>
						<h5>Verbling.com</h5>
						<p>Provide online ESL instruction<br>April 2017 - Present</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container pb-5">
			<div data-aos="slide-right">
				<div class="row flex-column-reverse flex-sm-row inline-block pb-5" id="tapif">
					<div class="col-sm-6 flex-column align-items-center text-center my-auto">
						<h4>English Assistant</h4>
						<h5>Teaching Assistant Program in France</h5>
						<p>Taught English in a French primary school<br>October 2012-April 2013</p>
					</div>
					<div class="col-sm-6 py-2">
						<img src="images/tapif.jpg" class="img-fluid mx-auto d-block" alt="Teaching Assistant Program in France logo"/>
					</div>
				</div>
			</div>
		</div>

		<div class="container pb-5">
			<div data-aos="slide-left">
				<div class="row inline-block pb-5" id="celta">
					<div class="col-sm-6 py-2 pb-sm-2 my-auto">
						<a href="https://drive.google.com/file/d/1ZURbUsdH57HZswZlNr3Q4-qipyl6Wvb_/view?usp=sharing" target="_blank">
							<img src="images/celta.jpg" class="img-fluid mx-auto d-block" alt="CELTA png"/>
						</a>
					</div>
					<div class="col-sm-6 d-flex justify-content-center flex-column text-center">
						<h4>Certificate in Teaching English <br>to Speakers of Other Languages</h4>
						<h5>Teaching House New York</h5>
						<p>Certification based on specifications <br>produced by Cambridge Assessment English<br>October 2009</p>
						<p><em>Click the image to see a larger version.</em></p>
					</div>
				</div>
			</div>
		</div>

		<div class="container pb-5">
			<div data-aos="slide-right">
				<div class="row px-5" id="testimonial">
					<div class>
						<h4>Student Testimonial</h4>
					</div>
					<div>
						<p>I had the opportunity to take lessons from Hunter one year ago. His approach was very interactive and
							conversational. He was well prepared for each session and came up with lessons that were tailored to my needs. I highly recommend Hunter for anyone who is interested in
							taking their English language skills to the next level!<br>-Moniz M.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- This is a dummy form. -->

	<div id="contact">
		<h3 class="text-center">Are you interested in tutoring? <br> Get in touch with me!</h3>
	</div>

	<div class="contact form border">
		<form id="hunters-contact-form" action="php/mailer.php" method="post" novalidate>
			<div class="form-group">
				<label for="contactName">Your Name <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"></span>
					</div>
					<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="contactEmail">Email address<span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"></span>
					</div>
					<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email address">
				</div>
			</div>
			<div class="form-group">
				<label for="contactMessage">Message <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"></span>
					</div>
					<textarea class="form-control" rows="5" id="contactMessage" name="contactMessage" placeholder="Enter your message here."></textarea>
				</div>
			</div>

			<!-- reCAPTCHA Site Key -->
			<div class="g-recaptcha row justify-content-center flex-sm-row" data-sitekey="6LfQEpQUAAAAAJUTjafoHXDAegwy1027x4yJ5ryi"></div>
			<div class="col mx-auto text-center">
				<button class="btn btn-success mt-3" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning mt-3" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</div>
		</form>
	</div>

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>

		<div class="pt-3 pb-3">
			<p class="text-center"><a href="https://www.verbling.com/teachers/40855554953217312955" target="_blank">Click here to visit my Verbling teacher profile!</a></p>
		</div>

		<div class="container-fluid footer">
			<div class="text-center bg-dark py-2">
				<a href="https://www.linkedin.com/in/huntercallaway/"><i id="social-li" class="fa fa-linkedin-square fa-2x px-5" aria-hidden="true"></i></a>
				<a href="https://github.com/HunterCallaway"><i id="social-gh" class="fa fa-github-square fa-2x px-5" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="col">
			<a id="backToTop" title="Back to top" href="#">Top</a>
		</div>

		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	</body>
</html>