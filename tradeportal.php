<!DOCTYPE HTML>
<html>
	<head>
		</script>
		<title>THEMOTORBIKEBUYERS.co.uk - Trade Portal</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Get a quick quote & sell your motorbike fast for cash today. We buy any bike and will collect free of charge." />
		<meta name="keywords" content="Buy, sell, quote, bike, motorbike, motorcycle, ducati, the motorbike buyers, uk" />
		<link rel=“canonical” href=“https://themotorbikebuyers.co.uk/vehicledetails” />
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
									<li><a href="/contact.php">Contact Us</a></li>
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

											$companyName = $_POST['company'];
											$name = $_POST['name'];
											$userEmail = $_POST['email'];
											$phone = $_POST['phone'];


											$to = "sales@themotorbikebuyers.co.uk";
											$subject = "Trade Portal Signup";
											$body = "";


											$body .="Company Name: ".$companyName. "\r\n";
											$body .="Name: ".$name. "\r\n";
											$body .="Phone Number: ".$phone. "\r\n";
											$body .="Client Email: ".$userEmail. "\r\n";

											
							
											mail($to,$subject,$body);
											$message_sent = true;
										}

										else{
											$invalid_class = "form-invalid";
										}

										//submit the form	
								
								}			
?>

		<main id="featured">
			<div class="container">
				<div class="row">
						<section>
							


								<?php
									if($message_sent):
								?>

								<div class="success"><h2>Information submitted successfully. Thank you.</h2></div>

								<?php
									else:
								?>

							<header>
								<h1>Trade portal coming soon...</h1>
							</header>
							<p>Enter your contact deatils below for updates.</p>



								<div class="formcontainer">
									<form action="tradeportal.php" method="POST" class="form">

										<div class="form-group">
											<label for="subject" class="form-label">Company Name</label>
											<input type="text" class="form-control" id="company" name="company" placeholder="Enter your company name" tabindex="1" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" tabindex="2" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Your Email</label>
											<input  type="email" class="form-control"  id="email" name="email" placeholder="Enter your Email" tabindex="3" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Phone Number</label>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" tabindex="4" required>
										</div>

										<div>
											<button type="submit" tabindex="5" class="btn">Submit</button>
										</div>
									</form>
								</div>
							<?php
							endif;
							?>
						</section>	
				</div>
			</div>
		</main>


		<!-- Copyright -->
		<footer id="copyright">
			<div class="container">
				<div class="links"> 
					<a href="/">Home</a>
					<a href="/about.html">About Us</a>
					<a href="/contact.php">Contact Us</a>
					<a href="/vehicledetails.php">Vehicle Details</a>
					<a href="/faq.html">FAQs</a>
				</div>
				<small>Copyright &copy; <script>document.write(new Date().getFullYear())</script>, The Motorbike Buyers. All Rights Reserved</small>
			</div>
		</footer>

	</body>
</html>