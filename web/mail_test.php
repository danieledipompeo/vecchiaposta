<?php
  require "./class.phpmailer.php";

  $mail = new PHPMailer();
//  $mail->SMTPDebug = true;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.vecchiaposta.it';  // Specify main and backup server
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = 'info@vecchiaposta.it';                            // SMTP username
$mail->Password = 'uomosil3nt3'; 
$mail->Port = '25';                          // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@vecchiaposta.it';
$mail->FromName = 'Vecchia Posta';
$mail->AddAddress('danieletennis@gmail.com', 'test');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'test';
$mail->Body    = 'test';
$mail->AltBody = 'test';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
