<!DOCTYPE HTML>
<html>
	<head>`
		<title>MOTORBIKEBUYERS.co.uk - Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Get a quick quote & sell your motorbike fast for cash today. We buy any bike and will collect free of charge." />
		<meta name="keywords" content="Buy, sell, quote, bike, motorbike, motorcycle, ducati, the motorbike buyers, uk" />
		<link rel=“canonical” href=“https://www.themotorbikebuyers.co.uk/contact.php” />
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="https://dvladesign.herokuapp.com/public/stylesheets/numberplate.css" media="screen" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/42f0216904.js" crossorigin="anonymous"></script>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
				<!--favicon-->
				<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="theme-color" content="#ffffff">

		<style>html{visibility: hidden;opacity:0;}</style>

			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-mobile.css" />

	</head>
	<body>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<a href="https://api.whatsapp.com/send?phone=447770444569" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        <span class="wa-grabber">Click here to get an instant WhatsApp quote!</span>
		</a>

		<!-- Header -->
<div class="container">
	<header id="header">
		<input type="checkbox" class="toggler">
		<div class="hamburger"><div></div></div>

			<!-- Logo -->
			<div id="logo">
				<a href="/"> <img src="images/mbuyers_curves_final.svg" alt="the motorbike buyers logo image"> </a>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<div>
					<div>
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/about.html">About Us</a></li>
							<li class="active"><a href="/contact.php">Contact Us</a></li>
							<li><a href="/faq.html">FAQs</a></li>
						</ul>
					</div>
				</div>		
			</nav>
	</header>
</div>


		<?php
				$message_sent = false;
								if(isset($_POST['email']) && $_POST['email'] != '') {

									if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

											$userName = $_POST['name'];
											$userEmail = $_POST['email'];
											$messageSubject = $_POST['subject'];
											$message = $_POST['message'];
							
											$to = "adam_baker@live.co.uk";
											$body = "";
							
											$body .="From: ".$userName. "\r\n";
											$body .="Email: ".$userEmail. "\r\n";
											$body .="Message: ".$message. "\r\n";
							
											//mail($to,$messageSubject,$body);
											$message_sent = true;
										}

										else{
											$invalid_class = "form-invalid";
										}
										//submit the form	
								}			
		?>


		<!-- Header -->

		<main id="featured">
			<div class="container">
				<div class="row">
					<div class="column50">
						<section>
							<header>
								<h1>Get in touch</h1>
							</header>
						</section>

						<section>
							<p>For any queries not answered in our FAQ page please let us know you requirements and we will respont as soon as possible.</p>
							<div class="contact-item">
							<i class="fas fa-phone"></i>&nbsp<a href="tel:+44 7770 444569">+44 7770 444569</a>	
							</div>
							<div class="contact-item">
							<i class="fas fa-envelope"></i>&nbsp<a href = "mailto: sales@themotorbikebuyers.co.uk">sales@themotorbikebuyers.co.uk</a>	
							</div>								
							<div class="contact-item">
							<a href="https://www.facebook.com/The-Motorbike-Buyers-105607414855856/" class="fa fa-facebook"></a>	
							<p>Follow and contact us directly on facebook </p>		
							</div>
						</section>
					
					</div>		
					
					<div class="column50">
						<section>
							<header>
								<h2>How Can We Help?</h2>
							</header>
							<p>Enter yout Email below and we shall get back to you.</p>	

						
							<?php
									if($message_sent):
								?>

								<h2>Thank you,<br>Your Email was sent. We will be in touch.</h2>

								<?php
									else:
								?>

								<div class="formcontactcontainer">
									<form action="contact.php" method="POST" class="form-contact">
										<div class="form-group">
											<label for="name" class="contact-form-label">Your Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" tabindex="1" required>
										</div>
										<div class="form-group">
											<label for="email" class="contact-form-label">Your Email</label>
											<input  type="email" class="form-control" <?= $invalid_class ?? "" ?> id="email" name="email" placeholder="Email" tabindex="2" required>
										</div>
										<div class="form-group">
											<label for="subject" class="contact-form-label">Subject</label>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
										</div>
										<div class="form-group">
											<label for="message" class="contact-form-label">Message</label>
											<textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
										</div>
										<div>
											<button type="submit" class="btn">Send Message!</button>
										</div>
									</form>
								</div>
								
							
								<?php
									endif;
								?>	


								<script src="https://code.jquery.com/jquery-2.1.1.min.js"
									type="text/javascript"></script>
								<script type="text/javascript">
									function validateContactForm() {
														var valid = true;
											
														$(".info").html("");
														$(".input-field").css('border', '#e0dfdf 1px solid');
														var userName = $("#userName").val();
														var userEmail = $("#userEmail").val();
														var subject = $("#subject").val();
														var content = $("#content").val();
														
														if (userName == "") {
															$("#userName-info").html("Required.");
															$("#userName").css('border', '#e66262 1px solid');
															valid = false;
														}
														if (userEmail == "") {
															$("#userEmail-info").html("Required.");
															$("#userEmail").css('border', '#e66262 1px solid');
															valid = false;
														}
														if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
														{
															$("#userEmail-info").html("Invalid Email Address.");
															$("#userEmail").css('border', '#e66262 1px solid');
															valid = false;
														}
											
														if (subject == "") {
															$("#subject-info").html("Required.");
															$("#subject").css('border', '#e66262 1px solid');
															valid = false;
														}
														if (content == "") {
															$("#userMessage-info").html("Required.");
															$("#content").css('border', '#e66262 1px solid');
															valid = false;
														}
														return valid;
													}
										</script>



							  </form>
						</section>
					</div>
				</div>
			</div>
		</main>

		<section class="container">
			<div id="topbar">
					<div class="reg-form">
						<form id="reg1" autocomplete="off" action="vehicledetails.php">
							<label for="fname">Enter reg here for your free bike valuation now.</label><br>
							<input type="text" maxlength="8" class="regtext" name="q" placeholder="Enter reg">
						<!--	<input type="submit" value="GO">-->
						<div class="continue">
							<button type="submit" class="btn">Continue</button>
						</div>
						</form>
					</div>	
			</div>		
		</section>

		<!-- Footer -->
		<footer id="copyright">
			<div class="container">
				<div class="links"> 
					<a href="/">Home</a>
					<a href="/about.html">About Us</a>
					<a href="/contact.php">Contact Us</a>
					<a href="/vehicledetails.php">Vehicle Details</a>
					<a href="/faq.html">FAQs</a>
				</div>
				<small>&copy; Copyright 2021, The Motorbike Buyers.</small>
			</div>
		</footer>

	</body>
</html>