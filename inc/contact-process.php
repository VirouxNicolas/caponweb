<?php

$to = "contact.caponweb@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $prenom = $_REQUEST['prenom'];
    $cmessage = $_REQUEST['message'];

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
    $body .= "<td style='border:none;'><strong>Prenom:</strong> {$prenom}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

 
    // redirect to success page
    if ($send){
    echo "success";
    }else{
        echo "invalid";
    }
 
?>