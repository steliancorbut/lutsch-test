<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "sysadmin@mobila-lutsch.ro"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$headers = 'From: webmaster@mobila-lutsch.ro' . "\r\n" .
'Reply-To: webmaster@mobila-lutsch.ro';

// set up email 
$msg = "Mesaj nou de pe site mobila-lutsch.ro !\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);

if(mail($myemail,"Mesaj de pe site",$msg,$headers)){
    header( 'Location: contact.php?mes=Mesajul a fost trimis cu succes! Va multumim.&alert=success' );
} else {
    header( 'Location: contact.php?mes=Eroare la trimiterea mesajului, va rugam reveniti.&alert=warning' );
    };

?>
