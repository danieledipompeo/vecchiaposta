<?php
/**
 * @author dipompeodaniele@gmail.com
 */
session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
require_once(realpath(dirname(__FILE__)).'/include/libs/mail/class.phpmailer.php');

require (realpath(dirname(__FILE__)).'/request_mail.php');
/*email per l'hotel*/
require (realpath(dirname(__FILE__)).'/hotel_mail.php');

header('location: index.php');