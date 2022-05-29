<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $BDate = $_POST['bdate'];
 $gender = $_POST['gender'];
 $address = $_POST['address'];

 $email_from = 'example@mydomainName.com' ;
 $email_subject = 'New Form';

$email_body = "User name: $name.\n".
              "User Email: $email.\n".
              "Birth Date: $bdate.\n".
              "Gender: $gender.\n".
              "Address: $address.\n";
 
$to = 'avsamtc@gmail.com';
$headers = "From: $email_from \r\n";

$Header = "Reply-to $email \r\n"

mail = ($to,$email_subject,$email_body,$headers);
header("Location:Contact.html");

?>