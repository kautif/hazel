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
						<a href="https://www.facebook.com/HBPBBQ/?ref=bookmarks" target="_blank"><img src="../img/facebook.png" alt="Hazel's Facebook"></a>
					</div>

				</div>

				<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a href="#">Menu</a>
				  <a href="#">Catering</a>
				  <a href="location.html">Find Us</a>
				  <a href="gallery.html">Satisfied Customers</a>
				  <a href="about.html">About Us</a> 
				</div>

				<!-- Use any element to open the sidenav -->
				<span onclick="openNav()"><img src="../img/hamburger.png"></span>

				<a href="#delivery"><button class="delivery-btn"><b>WE DELIVER</b></button></a>

				<div class="nav">
					<ul>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Catering</a></li>
						<li><a href="location.html">Find Us</a></li>
						<a href="gallery.html">Satisfied Customers</a>
						<li><a href="about.html">About Us</a></li>
					</ul>
				</div>

				<div class="menu">
					<a target="_blank" href="https://drive.google.com/file/d/0B7gr62k1jGTuOThVUG1hbEtaNEU/view?usp=sharing"><button>View Menu</button></a>
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
								<span>Number of Guests</span><input required type="number" name="guests"><br>
						</div>

						<div class="quote-middle">
							<span class="meat">Meats 1</span><select type="text" name="meats1">
								<option>Brisket</option>
								<option>Pork Spare Ribs</option>
								<option>Turkey Breast</option>
								<option>Garlic Sausage</option>
								<option>Polish Sausage</option>
								<option>Sausage Link</option>
							</select><br>
							<span class="meat">Meats 2</span><select type="text" name="meats2">
								<option>Brisket</option>
								<option>Pork Spare Ribs</option>
								<option>Turkey Breast</option>
								<option>Garlic Sausage</option>
								<option>Polish Sausage</option>
								<option>Sausage Link</option>
							</select><br>
							<span class="meat">Meats 3</span><select type="text" name="meats3">
								<option>Brisket</option>
								<option>Pork Spare Ribs</option>
								<option>Turkey Breast</option>
								<option>Garlic Sausage</option>
								<option>Polish Sausage</option>
								<option>Sausage Link</option>
							</select><br>
							<span class="sides">Sides 1</span><select type="text" name="sides1">
								<option>Baked Beans</option>
								<option>Pinto Beans</option>
								<option>Cole Slaw</option>
								<option>Potato Salad</option>
								<option>Mac n' Cheese</option>
								<option>Lay's Classsic Chips</option>

							</select><br>

							<span class="sides">Sides 2</span><select type="text" name="sides2">
								<option>Baked Beans</option>
								<option>Pinto Beans</option>
								<option>Cole Slaw</option>
								<option>Potato Salad</option>
								<option>Mac n' Cheese</option>
								<option>Lay's Classsic Chips</option>

							</select><br>

							<span class="sides">Sides 3</span><select type="text" name="sides3">
								<option>Baked Beans</option>
								<option>Pinto Beans</option>
								<option>Cole Slaw</option>
								<option>Potato Salad</option>
								<option>Mac n' Cheese</option>
								<option>Lay's Classsic Chips</option>

							</select><br>
							<span class="desserts">Desserts</span><select type="text" name="desserts">
								<option>Banana Pudding</option>
								<option>Cake</option>
								<option>Peach Cobbler</option>
							</select><br>

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

				<div class="footer">
					<ul class="f-menu">
						<h3>NAVIGATION</h3>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Catering</a></li>
						<li><a href="location.html">Find Us</a></li>
						<li><a href="gallery.html">Satisfied Customers</a></li>
						<li><a href="about.html">About Us</a></li>
					</ul>

					<ul class="delivery" id="delivery">
					<h3>WE DELIVER</h3>
						<li><a href="https://www.ubereats.com" target="_blank"><img src="../img/ubereats.png" alt="Uber Eats"></a></li>
						<li><a href="https://favordelivery.com" target="_blank"><img src="../img/favor.jpg" alt="Favor"></a></li>
						<li><a href="https://postmates.com" target="_blank"><img src="../img/postmates.png" alt="Postmates"></a></li>
						<li><a href="https://www.grubhub.com/" target="_blank"><img src="../img/grubhub.png" alt="Grubhub"></a></li>
						<li><a href="https://www.doordash.com/store/120248/?utm_source=partner-link&utm_medium=website&utm_campaign=120248" target="_blank"><img src="../img/doordash.jpg" alt="Door Dash"></a></li>
					</ul>

				<div class="creator">
					<span>Created by <a href="www.kautif.com">Autif Kamal</a></span>

				</div>

			</div>
			<script src="../js/sidenav.js"></script>
		</body>
	</html>

	<!-- Additional fields wanted... Number of guests, sides, dessert, meat -->