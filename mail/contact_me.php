<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['lastname'])  ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['city'])      ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$lastname = strip_tags(htmlspecialchars($_POST['lastname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$work = strip_tags(htmlspecialchars($POST)['work']);
$city = strip_tags(htmlspecialchars($POST)['city']);
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@hospedanos.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Recibiste un mail de la web de parte de:  $name $lastname";
$email_body = "Recibieron un nuevo mensaje desde la web del formulario de contacto.\n\n"."Aquí los detalles:\n\n Nombre: $name\n\n Apellido:$lastname\n\n Email: $email_address\n\nTelefono: $phone\n\n Trabajo: $work\n\n Ciudad: $city\n\nMensaje:\n$message";
$headers = "From: noreply@stamford.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>