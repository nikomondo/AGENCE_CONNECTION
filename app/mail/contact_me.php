<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Champs obligatoires non remplies!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@agenceconnectio.com'; // put your email
$email_subject = "Contact form envoyer par:  $name";
$email_body = "Nouveau message par le site agenceconnection.com. \n\n".
				  " voila les  details:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: info@agenceconnection.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>