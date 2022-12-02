<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

require_once 'vendor/autoload.php';
require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';

$outlook_mail = new PHPMailer\PHPMailer\PHPMailer();
$outlook_mail->CharSet = 'UTF-8';
$outlook_mail->ContentType = 'text/html';

$outlook_mail->IsSMTP();
// Send email using Outlook SMTP server
$outlook_mail->Host = 'smtp-mail.outlook.com';
// port for Send email
$outlook_mail->Port = 587;
$outlook_mail->SMTPSecure = 'tls';
$outlook_mail->SMTPDebug = 1;
$outlook_mail->SMTPAuth = true;
$outlook_mail->Username   = 'pruebaCorreosAnalisis@outlook.com';
$outlook_mail->Password   = 'analisis2022ucr';

$outlook_mail->From = 'pruebaCorreosAnalisis@outlook.com';
$outlook_mail->FromName = 'DAYAN'; // frome name
$outlook_mail->AddAddress('steverova0594@outlook.com', 'Steven');  // Add a recipient  to name // Name is optional

$outlook_mail->IsHTML(true); // Set email format to HTML

$outlook_mail->Subject = 'Here is the subject for onlinecode';
$outlook_mail->Body    = 'Send email using Outlook SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="https://onlinecode.org/" target="_blank">onlincode.org</a>';
$outlook_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at https://onlinecode.org/';

if (!$outlook_mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $outlook_mail->ErrorInfo;
    exit;
} else {
    echo 'Message of Send email using Outlook SMTP server has been sent';
}