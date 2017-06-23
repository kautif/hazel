<?php 

require('../config.php');
?>

<!DOCTYPE html> 
	<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<title>Hazel's Back Porch BBQ</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	</head>
		<body>

			<div class="all-content">
				<div class="top-flex">
					<div class="logo">
						<a href="../index.html"><img src="../img/hazel_bbq_logo.png" alt="Hazel's logo"></a>
					</div>

					<div class="contact">
						<p>(903) 394 - 8955</p>
						<p>2117 E Maddox Ave</p>
						<p>Fort Worth, TX 76104</p>
						<a href="https://www.facebook.com/hazels.backporch" target="_blank"><img src="../img/facebook.png" alt="Hazel's Facebook"></a>
					</div>

				</div>

				<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a href="">Menu</a>
				  <a href="#">Catering</a>
				  <a href="location.html">Find Us</a>
				  <a href="gallery.html">Satisfied Customers</a>
				  <a href="about.html">About Us</a> 
				</div>

				<!-- Use any element to open the sidenav -->
				<span onclick="openNav()"><img src="../img/hamburger.png"></span>

				<div class="nav">
					<ul>
						<li><a href="">Menu</a></li>
						<li><a href="#">Catering</a></li>
						<li><a href="location.html">Find Us</a></li>
						<a href="gallery.html">Satisfied Customers</a>
						<li><a href="about.html">About Us</a></li>
					</ul>
				</div>

				<div class="menu">
					<h1></h1>
				</div>

				<div class="catering">
						<h1>Catering Request Form</h1>
					<div class="catering-quote">
						<div class="quote-left">
							<form method="POST" action="<?=getUrl('/php/menu_mail.php');?>">
								<span>Business or Organization Name:</span><input required type="text" name="name"><br>
								<span>Full Contact Name:</span><input required type="text" name="contact"><br>
								<span>Phone:</span> <input required type="tel" name="phone"><br>
								<span>Email:</span><input required type="email" name="email"><br>
						
						</div>

						<div class="quote-middle">
							<span>Number of Guests</span><input required type="number" name="guests"><br>
							<span>Meats</span><input type="text" name="meats"><br>
							<span>Sides</span><input type="text" name="sides"><br>
							<span>Desserts</span><input type="text" name="desserts"><br>

						</div>

						<div class="quote-right">
							<span>Address of Event:</span><input required type="text" name="address"><br>
							<span class="date">Desired Date:</span><input required type="date" name="date"><br>
							<span class="call">Best time to Call:</span><br><select name="call">
												<option value="morning">Morning</option>
												<option value="afternoon">Afternoon</option>
												<option value="evening">Evening</option>	
											</select><br>
							<span>Additional Details:</span> <br><textarea name="more_details"></textarea><br>

						</div>
					</div>
							<input class="submit" type="submit" value="SUBMIT"></input>
						</form>
				</div>
				<script src="../js/slide.js"></script>
		</body>
	</html>

	<!-- Additional fields wanted... Number of guests, sides, dessert, meat -->