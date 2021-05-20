<!DOCTYPE HTML>
<html>
	<head>
		</script>
		<title>MOTORBIKEBUYERS.co.uk - Fast Online Quote</title>
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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<a href="https://api.whatsapp.com/send?phone=447770444569" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        <span class="wa-grabber">Click here to get an instant WhatsApp quote!</span>
		</a>

		<!-- Header -->
		<div class="container">
			



			<div id="header">
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

			</div>
		</div>


<?php
				$message_sent = false;
								if(isset($_POST['email']) && $_POST['email'] != '') {

									if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

											$userReg = $_POST['reg'];
											$make = $_POST['manufacturer'];
											$model = $_POST['model'];
											$year = $_POST['selector'];
											$mileage = $_POST['mileage'];
											$services = $_POST['services'];
											$keeper = $_POST['keeper'];
											$finance = $_POST['finance'];
											$stolen = $_POST['stolen'];
											$condition = $_POST['condition'];
											$phone = $_POST['phone'];
											$name = $_POST['name'];
											$userEmail = $_POST['email'];

											$to = "sales@themotorbikebuyers.co.uk";
											$subject = "Vehicle Enquiry";
											$body = "";
							
											$body .="Registration: ".$userReg. "\r\n";
											$body .="Make: ".$make. "\r\n";
											$body .="Model: ".$model. "\r\n";
											$body .="Year: ".$year. "\r\n";
											$body .="Mileage: ".$mileage. "\r\n";
											$body .="Service history: ".$services. "\r\n";
											$body .="Registered keeper?: ".$keeper. "\r\n";
											$body .="Outstanding finance?: ".$finance. "\r\n";
											$body .="Stolen?: ".$stolen. "\r\n";
											$body .="Condition - 10 being best: ".$condition. "\r\n";
											$body .="Name ".$name. "\r\n";
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

		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="12u">
						<section>
							


								<?php
									if($message_sent):
								?>

								<div class="success"><h2>Vehicle details submitted successfully. Thank you.</h2></div>

								<?php
									else:
								?>

							<header>
								<h1>Enter Your Motorbike Details</h1>
							</header>
							<p>Enter your vehicle details below for a free quotation.</p>



								<div class="formcontainer">
									<form action="vehicledetails.php" method="POST" class="form">
										<div class="form-group">
											<label for="subject" class="form-label">  </label>
											<input type="text" class="form-control" id="reg" name="reg" placeholder="reg" tabindex="0" value="<?php echo htmlspecialchars($_GET['q']) ?>">
										</div>
										<div class="form-group">
											<label for="manufacturer" class="form-label">Manufacturer</label>
											<select id="manufacturer" class="form-control" name="manufacturer" tabindex="1" required>
														
											</select>
										</div>
										<div class="form-group">
											<label for="subject" class="form-label">Model</label>
											<input type="text" class="form-control" id="subject" name="model" placeholder="Model" tabindex="2" required>
										</div>

										<div class="form-group">
											<label for="selector" class="form-label">Year</label>
											<select id="selector" class="form-control" name="selector" tabindex="3" required>
											
											</select>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Mileage</label>
											<input type="text" class="form-control" id="subject" name="mileage" placeholder="Mileage" tabindex="4" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Service history</label>
											<select name="services" id="selector" class="form-control">
											<option value="0" disabled selected>Please select</option>
											<option value="1">Full manufacturer</option>
											<option value="2">Full history (mixed)</option>
											<option value="3">Part</option>
											<option value="4">None</option>
											</select>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Are you the registered owner & keeper of the vehicle?</label>
											<input type="radio" id="selector" name="keeper" value="Yes" checked>
											<label for="selector">Yes</label><br>
											<input type="radio" id="selector" name="keeper" value="No">
											<label for="selector">No</label><br>
										</div>

										<div class="form-group">
										<label for="subject" class="form-label">Does the vehicle have any outstanding finance?</label>
											<input type="radio" id="selector" name="finance" value="Yes">
											<label for="selector">Yes</label><br>
											<input type="radio" id="selector" name="finance" value="No" checked>
											<label for="selector">No</label><br>
										</div>

										<div class="form-group">
										<label for="subject" class="form-label">Has the vehicle ever been a registered write off or stolen?</label>
											<input type="radio" id="selector" name="stolen" value="Yes">
											<label for="selector">Yes</label><br>
											<input type="radio" id="selector" name="stolen" value="No" checked>
											<label for="selector">No</label><br>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Condition</label>
											<select name="condition" id="selector" class="form-control">
											<option value="0" disabled selected>Please select</option>
											<option value="1">1 - Very poor</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5 - Average</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10 - Very good</option>
											</select>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" tabindex="" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Phone Number</label>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" tabindex="" required>
										</div>

										<div class="form-group">
											<label for="subject" class="form-label">Your Email</label>
											<input  type="email" class="form-control"  id="email" name="email" placeholder="Enter your Email" tabindex="6" required>
										</div>

										<div>
											<button type="submit" class="btn">Submit</button>
										</div>
									</form>
								</div>
							<?php
							endif;
							?>
						</section>
					</div>		
				</div>
			</div>
		</div>




<script>
		let dropdown = document.getElementById('selector');
		dropdown.length = 0;

		let defaultOption = document.createElement('option');
		defaultOption.text = 'Please Select';

		dropdown.add(defaultOption);
		dropdown.selectedIndex = 0;

		const url = 'https://www.themotorbikebuyers.co.uk/DATE.json';

		const request = new XMLHttpRequest();
		request.open('GET', url, true);

		request.onload = function() {
  if (request.status === 200) {
    const data = JSON.parse(request.responseText);
    let option;
    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      option.text = data[i].DATE;
      option.value = data[i].DATE;
      dropdown.add(option);
    }
   } else {
    // Reached the server, but it returned an error
  }   
}

request.onerror = function() {
  console.error('An error occurred fetching the JSON from ' + url);
};

request.send();

</script>

<script>
		let manudropdown = document.getElementById('manufacturer');
		manudropdown.length = 0;

		let manuOption = document.createElement('option');
		manuOption.text = 'Please select';

		manudropdown.add(manuOption);
		manudropdown.selectedIndex = 0;

		const manuurl = 'https://www.themotorbikebuyers.co.uk/makes.json';

		const manurequest = new XMLHttpRequest();
		manurequest.open('GET', manuurl, true);

		manurequest.onload = function() {
  if (manurequest.status === 200) {
    const data = JSON.parse(manurequest.responseText);
    let manuoption;
    for (let i = 0; i < data.length; i++) {
      manuoption = document.createElement('option');
      manuoption.text = data[i].Make;
      manuoption.value = data[i].Make;
      manudropdown.add(manuoption);
    }
   } else {
    // Reached the server, but it returned an error
  }   
}

request.onerror = function() {
  console.error('An error occurred fetching the JSON from ' + manuurl);
};
manurequest.send();

</script>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
			<small>&copy; Copyright 2021, The Motorbike Buyers.</small>
			</div>
		</div>

	</body>
</html>