<?php
	$errors = array();        // array to hold validation errors
	$data   = array();        // array to pass back data

  if(!empty($_REQUEST['action']) && $_REQUEST['action'] == "postFormData")
  {
	   // validate the variables ========
	  //  if (empty($_POST['first_name']))
		//  $errors['first_name'] = 'Make is required.';
	  //  if (empty($_POST['last_name']))
		//  $errors['last_name'] = 'Model is required';
		 if (empty($_POST['customer_name']))
		 $errors['customer_name'] = 'Customer Name is required';
		 if (empty($_POST['phone_num']))
		 $errors['phone_num'] = 'Phone number is required';
		 if (empty($_POST['email']))
		 $errors['email'] = 'Email is required';
	   // if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false && $_POST['email']!="" ) {
     // 		$errors['email'] = 'Enter Valid Email';
     //      }
	   // return a response ==============
	   // response if there are errors
	   if ( ! empty($errors)) {
		   // if there are items in our errors array, return those errors
			 $data['success'] = false;
			 $data['errors']  = $errors;
	   }
		 else { //if there are no errors, return a message , process form
		   $myemail = "bakerdp@sunyit.edu";
			 $name = $_POST['customer_name']; //TODO: get customer name into here
			 $email = $_POST['email'];
			 $phone_num = $_POST['phone_num'];
			//  $make = $_POST['first_name'];
			//  $model = $_POST['last_name'];
			//  $year = $_POST['year'];
			//  $price = $_POST['price_range'];
			//  $mileage = $_POST['mileage'];
			 $subject = "DogNET Web-Form";
			 $message = "Name: " . $name . "\r\nEmail: " . $email;
			//  $message .= "\r\nVehicle: " . $year . " " . $make . " " . $model;
			//  $message .= "\r\nPrevious Miles: " . $mileage . " \r\nPrice-Range: " . $price;
			 $headers = "From: $name\r\n";
			 $headers .= "Reply-To: $email\r\n";
			 mail($myemail, $subject, $message, $headers);
	     $data['message'] = "Your email was sent successfully! We will respond to your request within 24 hours.";
			 $data['success'] = true;
		 }
		 echo json_encode($data);
  }
?>
