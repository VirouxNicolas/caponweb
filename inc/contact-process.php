<?php
$name = $_POST["name"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "ibrahima.conde@hotmail.com";
$Subject = "Vous avez un nouveau message";
 
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Prenom: ";
$Body .= $prenom;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 

$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>