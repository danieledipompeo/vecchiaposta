<?php
  require_once(realpath(dirname(__FILE__))."/include/libs/mail/class.phpmailer.php");

$mail = new PHPMailer();
//  $mail->SMTPDebug = true;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup server
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = '';                            // SMTP username
$mail->Password = ''; 
$mail->Port = '';                          // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = '';
$mail->FromName = 'B&B La Vecchia Posta';
$mail->AddAddress($_POST['book-email']);  // Add a recipient

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Richiesta Prenotazione';

$mail->Body    = '<div>
<!--div>
    <img src="cid:logoimg" alt="Logo del B&B La Vecchia Posta" width="200" height="150">
</div-->
<br>
<div>Gentile '.$_POST['nomecliente'].'</div>
<p>le confermiamo la ricezione della sua richiesta.
Nelle prossime ore riceverà la nostra migliore offerta in riferimento alla sua rihciesta.</p>
<p>le invio i nostri recapiti telefonici:</p>
<div>
    <ul>
        <li>345/0536542&nbsp;NANDO</li>
        <li><a href="tel:347%2F9749101" value="+393479749101" target="_blank">347/9749101</a> DANIELE</li>
    </ul>
<p>Lieti della vostra richiesta vi porgiamo<p>
Cordiali Saluti
<div><i><br><small>
Per raggiungerci le consigliamo di prendere l\'uscita L\'AQUILA OVEST
proseguire per TERAMO, seguendo le indicazioni blu e successivamente
segiure le indicazio per CAGNANO AMITERNO.</div>
<div>Per qualsiasi domanda o chiarimento siamo a vostra completa disposizione</div></small></i>
<br>
<hr size="2" width="100%">
<br><font face="Calibri" size="+1"><b><big><big>La Vecchia Posta<br></big></big></b></font>
<small><small><font face="Calibri" size="+1"><small><small><b><big><big>di Daniele Di Pompeo</big></big></b></small></small></font></small><br>
<small>P.Iva: 01814910665<br>Cod.Fisc: DPM DNL 83L26 A345L</small>
<br>Iban: IT53 W030 3203 6000 1000 0002224 intestato a: Daniele Di Pompeo<br>
<font face="Calibri" size="+1"><big>L\'Aquila</big><br>Via Amiternum, 6 - SP30a<br>
67012 Cagnano Amiterno<br><br><b>Cell</b> <a href="tel:347%209749101" value="+13479749101" target="_blank">347 9749101</a><br><b>Email</b> <a href="mailto:info@vecchiaposta.it" target="_blank">info@vecchiaposta.it</a></font>&nbsp;</small></div><div class="yj6qo"></div><div class="adL">
</div></div>';
$mail->AltBody = '';


if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

$mail->From = '';
$mail->FromName = 'Richiesta dal sito web';
$mail->AddAddress($_POST['book-email']);  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Richiesta Prenotazione dal sito web';

$mail->Body    = '<div>

<ul>
<li>Nome:'.$_POST['nomecliente'].'</li>
<li>Email:'.$_POST['book-email'].'</li>
<li>Telefono:'.$_POST['book-phone'].'</li>
<li>Notti:'.$_POST['book-email'].'</li>
<li>Persone:'.$_POST['book-num-people'].'</li>
<li>Note:'.$_POST['book-email'].'</li>
<li>Camere:'.$_POST['book-email'].'</li>
</ul> </div>';
$mail->AltBody = 'test';


if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
