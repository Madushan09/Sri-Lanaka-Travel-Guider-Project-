<?php

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['place'];
$message=$_POST['message'];

$email_from ='info@SLguider.com';
$email_place='New Form Submission';
$email_body="User Name:$name.\n ".
             "User Email:$visitor_email.\n".
             "place:$subject.\n ".
             "User message:$message.\n ";

$to='avinash625@gmail.com';
$headers = "From $email_from\r\n";
$headers.="Reply-To:$visitor_email\r\n;


mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html")
?>