<?php
  require "./class.phpmailer.php";

  $mail = new PHPMailer();
//  $mail->SMTPDebug = true;

//$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.vecchiaposta.it';  // Specify main and backup server
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = 'info@vecchiaposta.it';                            // SMTP username
$mail->Password = 'uomosil3nt3'; 
$mail->Port = '25';                          // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@vecchiaposta.it';
$mail->FromName = 'Vecchia Posta';
$mail->AddAddress($_POST['email'], $_POST['name']);
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Richiesta di prenotazione dal sito';
$mail->AddEmbeddedImage('logo.gif', 'logoimg', 'logo.gif');
$mail->Body    = '<div dir="ltr"><div dir="ltr"><div class="gmail_extra"><div class="=
gmail_quote"><div class="gmail_quote"><img src="cid:logoimg" alt="Logo del B&B La Vecchia Posta" width="200" height="150"><br></div><div class="gmail_quote">
<br>Gentile '.$_POST['name'].',<br>

le confermiamo la disponibilit=E0 di =A0camera con bagno privato in camera.=
<br>

Il costo della prenotazione &egrave; di &euro; giornalieri comprensivi di prima cola=
zione.<br>
&Egrave; a vostra disposizione la terrazza, il nostro parcheggio, il giardino=
 privato, mountainbike, internet wifi h24 gratuito e libero.<br><br>Per la =
prenotazione della stanza le chiediamo il pagamento anticipato del 50% del =
totale della prenotazione da effettuarsi:<br>

<ul><li>o tramite <u>bonifico bancario</u> sul conto: Iban:=A0</li><ul><li>=
IT53 W030 3203 6000=20
1000 0002224 istituto bancario CREDEM filiale di L&#39;Aquila=A0</li><li>in=
testato a: Daniele Di Pompeo=A0</li><li>causale nome e
 cognome con il quale ci avete contattato</li></ul><li>o <u>tramite paypal<=
/u>, se sceglierete questa opzione potete inviare il pagamento tramite <a h=
ref="http://www.paypal.it" target="_blank">www.paypal.it</a> all&#39;in=
dirizzo di posta <a href="mailto:info@vecchiaposta.it" target="_blank">=
info@vecchiaposta.it</a></li>

</ul>L&#39;offerta =E8 valida per 4 giorni dal ricevimento dell&#39;e-mail,=
 scaduti i 4 giorni si considerer=E0 non accettata.</div><div class="gmai=
l_quote"><b><u>Prima di effettuare il pagamento, anche entro i 4 giorni vi =
chiediamo di contattarci telefonicamente..=A0</u></b><br>

<br></div><div class="gmail_quote">
Il check-in =E8 dalle ore 15:00, il check-out =E8 entro le ore 11:30.<br>

<br>Lieti della vostra richiesta vi porgiamo<br>

Cordiali Saluti<br><i><br><small>Per
 raggiungerci le consigliamo di prendere l&#39;uscita L&#39;AQUILA OVEST=20
proseguire per TERAMO, seguendo le indicazioni blu e successivamente=20
segiure le indicazio per CAGNANO AMITERNO.<br>Per qualsiasi domanda o chiar=
imento siamo a vostra completa disposizione</small></i> <br>
<hr size="2" width="100%">
<br><font face="Calibri" size="+1"><b><big><big>La Vecchia Posta<br></b=
ig></big></b></font><small><small><font face="Calibri" size="+1"><small=
><small><b><big><big>di Daniele Di Pompeo</big></big></b></small></small></=
font></small>
<br>
<small>P.Iva: 01814910665<br>Cod.Fisc: DPM DNL 83L26 A345L</small><br>Iban:=
 IT53 W030 3203 6000 1000 0002224 intestato a: Daniele Di Pompeo<br><font f=
ace="Calibri" size="+1"><big>L&#39;Aquila</big><br>Via Amiternum, 6 - S=
P30a
<br>
67012 Cagnano Amiterno<br><br><b>Tel e Fax</b> 0862 978541<br><b>Cell</b> <=
a href="tel:347%209749101" value="+13479749101" target="_blank">347 9=
749101</a><br><b>Email</b> <a href="mailto:info@vecchiaposta.it" target=
="_blank">info@vecchiaposta.it</a></font>=A0</small></div>
</div></div>
<br>
<br>
<br>
<br>
<br></div>
<br></div>';

$mail->AltBody = 'test';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
