<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $country_name = $_SESSION['country_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>


<!doctype html>
<html>
<head>
<title>Donation Form</title>
<link rel="icon" type="image/png" href="images/logoicon.ico" /> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Donation Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600italic,600,700,700italic' rel='stylesheet' type='text/css'><!-- /font files -->
</head>
<body>
<h1 class="header-agileits w3 w3l agile-info">Donation Form</h1>

<div class="content-w3ls">
	<div class="form-w3layouts">
		<form action="form.php" method="post">
			<div class="form-control"> 
				<label class="header">Name <span>*</span> </label>
				<input type="text" id="name" name="txtname" value = "<?= $first_name.'' ?>">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Email <span>*</span> </label>
				<input type="email" id="email" name="txtemail" value = <?= $email.'' ?> placeholder="mail@example.com" title="Please enter a Valid Email Address" required="">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Address <span>*</span> </label>
				<input type="text" id="bill" name="bill" placeholder="Address" title="Please enter Your Address" required="">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Phone Number <span>*</span> </label>	
				<input type="number" id="usrtel" name="txtusrtel" placeholder="Your Phone Number" title="Please enter Your Phone Number" required="">
				<div class="clear"></div>
			</div>	
			<div class="form-control">	
				<label class="header">Donation amount(LKR) <span>*</span> </label>	
				<input type="number" id="usrtel" name="usrtel1" placeholder="20" title="Please enter Your Amount" required="">
				<div class="clear"></div>
			</div>	
			<div class="form-control">
				<label class="enquiry">Donation Comments <span>*</span> </label>
				<textarea id="message" name="txtmessage" placeholder="Your Queries" title="Please enter Your Queries"></textarea>
				<div class="clear"></div>
			</div>
			
						
				
			<div class="form-control">
			<input type="submit" value="Donate" class="register" title="Your Donation Has Been Recorded">
				
				<div class="clear"></div>
			</div>	
			
			
			 
		</form>
	</div>
</div>

<p class="copyright agileits-w3layouts agile w3-agile">© All Right Reserved <a href="../HomePage.html" target="_blank">JoinHands</a></p>
</body>
</html>