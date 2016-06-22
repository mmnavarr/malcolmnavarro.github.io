<?php
		if(isset($_POST['submit'])){
			$to = "mmnavarrox@gmail.com"; 
			$from = $_POST['contact_email']; // this is the sender's Email address
			$name = $_POST['contact_name']; //input name
			$phone_number = $_POST['contact_phone']; //input phone number
			$subject = "Contact Us";

			$message = $name . " reachable at " . $phone_number . " - " . $_POST['msg'];		
		
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
		
			echo "<script type='text/javascript'>Materialize.toast('Thank you! Your email has been sent and I will get back to you as soon as possible.', 4000)</script>";
		}
	?>