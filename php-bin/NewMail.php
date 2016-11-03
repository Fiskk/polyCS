<?php
  // array to hold validation errors
	$errors = array();
	// array to pass back data
	$data   = array();

  if(!empty($_REQUEST['action']) && $_REQUEST['action'] == "postFormData")
  {
		 if (empty($_POST['email'])) {
		   $errors['email'] = 'Email is required';
		 }
		 elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		   $errors['email'] = 'Invalid email format';
		 }
		 if (empty($_POST['message'])) {
			 $errors['message'] = 'Comment is required';
		 }

	   if ( ! empty($errors)) {
		   // If there are items in our errors array, bind data to $data
			 $data['success'] = false;
			 $data['errors']  = $errors;
	   }
		 else {
			 // If there are no errors, return a message to user and process form
		   $webmaster_email = "bakerdp@sunyit.edu";
			 $name = $_POST['customer_name'];
			 $email = $_POST['email'];
			 $subject = "DogNET Help-Desk: " . $_POST['subject'];
			 $message = "NOTE: This correspondence originated from the CS Website's mail-form.\r\n\r\n"
                . "From: " . $name . "\r\nEmail: $email\r\nSubject: "
			          . $_POST['subject'] . "\r\nMessage: " . $_POST['message'];

			 $headers = "From: $name\r\n";
			 $headers .= "Reply-To: $email\r\n";
			 mail($webmaster_email, $subject, $message, $headers);

	     $data['message'] = "Your email was sent successfully! We will respond to your request within 24 hours.";
			 $data['success'] = true;
		 }
     // return serialized data (error or success messages)
		 echo json_encode($data);
  }
?>
