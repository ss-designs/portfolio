<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_Post['message'];

  $email_from = 'visitor@ssldesigns.com'

  $email_subject = "New Form Submission":
  
  $email_body = "User Name: $name. \n".
  						"User Email: $visitor_email.\n".
  								"User Message: $message.\n";


  $to = "shaneswebdev7@gmail.com"

  $headers ="From $email_from \n";

  $headers .="Reply To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header ("Location: index.html");

?>