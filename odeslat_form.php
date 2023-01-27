<?php
$to = "klara.vejrova@casua.cz,milicavujosevic@yahoo.com"; 
    $from = $_POST['mail'];
    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $narodnost = $_POST['narodnost'];
    $profese = $_POST['profese']; 
    $web = $_POST['web'];
    $dnr = $_POST['datum_nar'];
          
    $headers = "From: Grand Prix";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $subject = "Grand Prix Architektů: Nová registrace";

    $link = '#';

	$body = "<!DOCTYPE html><html lang='cs'><head><meta charset='utf-8'><title>Grand Prix Architektů</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align:;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<p><strong>Jméno:</strong> {$jmeno}";
	$body .= " {$prijmeni}";
    $body .= "<br><strong>Datum narození:</strong> {$dnr}";
    $body .= "<br><strong>Telefon:</strong> {$phone}";
    $body .= "<br><strong>E-mail:</strong> {$email}";
    $body .= "<br><strong>Národnost:</strong> {$narodnost}";
    $body .= "<br><strong>Profese:</strong> {$profese}</p>";
    $body .= "<p><strong>Web:</strong> {$web}</p>";
	$body .= "</tr>";
	$body .= "<tr><td></td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
header('Location: ../clenstvi/ok');      
?>