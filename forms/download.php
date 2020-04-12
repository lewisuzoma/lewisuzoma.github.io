<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../composer/vendor/autoload.php';
require '../lib/class.lib.php';

$receiving_email_address = 'boblewisu@gmail.com';

$mail = new PHPMailer();

$user = new activity();

try {
$mail->SMTPDebug = 0;
//$mail->ajax = true;
  
$mail->setFrom($receiving_email_address, 'CV Download');
$mail->addAddress($receiving_email_address);
$mail->Subject = 'CV Download';

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
'host' => 'example.com',
'username' => 'example',
'password' => 'pass',
'port' => '587'
);
*/

/* SMTP parameters. */
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; 					 // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Username = $receiving_email_address;                 // SMTP username
$mail->Password = 'MACLEWISON0.';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  // or 465                                  // TCP port to connect to

/* Disable some SSL checks. */
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
);

$emailBody = "<b>" .$_POST['email']. "</b><br><b>User Ip</b> " . long2ip($user->getIp()). "<br><b>Browser</b> " .$user->getbrowser(). "<br><b>Download time</b> " .$user->server_time(). "";

$mail->isHTML(true);

$mail->Body = $emailBody;

if($mail->send()){
	echo 'OK';
}
else {
	echo "Download failed. Try again";
}

} catch (Exception $e) {
    echo "Message could not be sent.";
}
