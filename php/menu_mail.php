<?php
$name = $contact = $phone = $email = $guests = $meats1 = $meats2 = $meats3 = $sides1 = $sides2 = $sides3 = $desserts = $address = $date = $call = $more_details = "";

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
	  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// print_r($_POST);
  $name = test_input($_POST["name"]);
  $contact = test_input($_POST["contact"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $guests = test_input($_POST["guests"]);
  $meats1 = test_input($_POST["meats1"]);
  $meats2 = test_input($_POST["meats2"]);
  $meats3 = test_input($_POST["meats3"]);
  $sides1 = test_input($_POST["sides1"]);
  $sides2 = test_input($_POST["sides2"]);
  $sides3 = test_input($_POST["sides3"]);
  $desserts = test_input($_POST["desserts"]);
  $address = test_input($_POST["address"]);
  $date = test_input($_POST["date"]);
  $call = test_input($_POST["call"]);
  $more_details = test_input($_POST["more_details"]);

  if (empty($contact) || empty($phone) || empty($email) || empty($guests) || empty($address) || empty($date) ||  empty($call)) { 
  		echo "Some form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;
  }

	$to = 'kautif@gmail.com';
	$subject = "Back Porch BBQ Catering Inquiry";				
	$txt = "Business or Organization Name: {$_POST['name']}<br> Full Contact Name: {$_POST['contact']} <br> Phone: {$_POST['phone']} <br> Email: {$_POST['email']} <br> Guests: {$_POST['guests']} <br> Meats 1: {$_POST['meats1']} <br> Meats 2: {$_POST['meats2']} <br> Meats 3: {$_POST['meats3']} <br> Sides 1: {$_POST['sides1']} <br> Sides 2: {$_POST['sides2']} <br> Sides 3: {$_POST['sides3']} <br> Desserts: {$_POST['desserts']} <br> Address of Event: {$_POST['address']} <br> Desired Date: {$_POST['date']} <br> Best Time to Call: {$_POST['call']} <br> Additional Details: {$_POST['more_details']}";
	$headers = "From: Hazel Prophete <noreply@gmail.com'>\r\n";
	$headers .= "Reply-To: Hazel Prophete <noreply@gmail.com> noreply@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$success=mail($to,$subject,$txt,$headers);
	if ($success) {
		$BASE_URL = 'http://www.kautif.com/hazel';
		header("Location: $BASE_URL/pages/phpreceive.html"); // Use to make a confirmation page
		echo htmlspecialchars($_SERVER["PHP_SELF"]);
	} else {
		echo "Sending mail failed. Please try again. Contact us directly if it still doesn't work. Sorry for the inconvenience. Thank you.";
		exit;
	}
}
?>