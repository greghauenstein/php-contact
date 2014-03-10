<?php

if(isset($_POST['submit'])) {
$to = "EMAIL GOES HERE";
$subject = "SUBJECT GOES HERE";
 
// data the visitor provided
$firstname_field = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname_field = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
// ADDITIONAL FIELDS GO HERE
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);


//constructing the message
$body = " From: $firstname_field $lastname_field\n\n E-Mail: $email_field\n\n";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header("Location: http://URL-REDIRECT.biz");
} else {
 <div style="margin: 50px 0;">
   <p style="text-align: center; font-size: 16px; line-height: 20px;">
     <strong>Oh dear.</strong><br />
     Something has gone awry.</p>
 </div>
}
?>