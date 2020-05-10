<?php

$to = "contact.caponweb@gmail.com"; 
    $name = $_REQUEST['name']; 
    $prenom = $_REQUEST['prenom']; 
    $Allcountry= $_REQUEST['country'];
    $SeniorJunior= $_REQUEST['choixSJ'];  
    $Flicence = $_REQUEST['licence']; 
    $Category = $_REQUEST['choix']; 
    $from = $_REQUEST['email']; 
    $reservation = $_REQUEST['reservation'];
    $Textemessage = $_REQUEST['message']; 
    
    
    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf8_encode\r\n";

    $subject = "Vous avez un nouveau message ";


	$body = "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>Contact</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Nom:</strong> {$name}</td>";
    $body .= "</tr>";
    $body .= "<td style='border:none;'><strong>Prenom:</strong> {$prenom}</td>";
    $body .= "<tr>";
    $body .= "<td style='border:none;'><strong>Nationalité:</strong> {$Allcountry}</td>";
    $body .= "</tr>";
    $body .= "<td style='border:none;'><strong>Senior/Junior:</strong> {$SeniorJunior}</td>";
    $body .= "<tr>";
    $body .= "<td style='border:none;'><strong>Licence:</strong> {$Flicence}</td>";
    $body .= "</tr>";
    $body .= "<td style='border:none;'><strong>Category:</strong> {$Category}</td>";
    $body .= "<tr>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "</tr>";
    $body .= "<td style='border:none;'><strong>Banquet reservation:</strong> {$reservation}</td>";
    $body .= "</tr>";
	$body .= "</tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong> {$Textemessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

 
    if ($send){
    echo "success";
    }else{
        echo "invalid";
    }
 
?>