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
		   $myemail = "bakerdp@sunyit.edu";
			 $name = $_POST['customer_name'];
			 $email = $_POST['email'];
			 $subject = "DogNET Help-Desk: " . $_POST['subject'];
			 $message = $_POST['message'];

			 $headers = "From: $name\r\n";
			 $headers .= "Reply-To: $email\r\n";
			 mail($myemail, $subject, $message, $headers);

	     $data['message'] = "Your email was sent successfully! We will respond to your request within 24 hours.";
			 $data['success'] = true;
		 }
     // return serialized data (error or success messages)
		 echo json_encode($data);
  }
?>
