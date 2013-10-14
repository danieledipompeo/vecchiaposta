<?php

/**
 * @author dipompeodaniele@gmail.com
 */

session_start();

require "include/beContent.inc.php";
require "include/auth.inc.php";
require_once 'include/content.inc.php';
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");
InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$offertaEntity);

$form->addSection("Offerta Management");
$form->addText("title", "Titolo", 80, MANDATORY);
$form->addLongDate("date", "Data", MANDATORY);

$form->addEditor("body", "Testo", 20, 50, MANDATORY);
$form->addEditor("suggest", "Presentazione", 20, 50, MANDATORY);
$form->addText("prezzo", "Prezzo", 40, MANDATORY);
$form->addCheck("active", "Attiva");

$main->setContent("body", $form->requestAction());

$main->close();
