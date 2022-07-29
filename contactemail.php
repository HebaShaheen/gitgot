
<form method="post" name="myemailform" action="contactemail.php">

Enter Name:	<input type="text" name="name">

Enter Email Address:	<input type="text" name="email">

Enter Message:	<textarea name="message"></textarea>

<input type="submit" value="Send Form">
</form>
<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_from = 'Heba@contactemail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message";
                            $to = "shaheenheba2000@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .= "Reply-To: $visitor_email \r\n";
                          
                            mail($to,$email_subject,$email_body,$headers);
                          
?>
