<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.07
 * @author dipompeodaniele@gmail.com
 */


session_start();

require "include/beContent.inc.php";
require "include/auth.inc.php";
require_once 'include/content.inc.php';
require_once realpath(dirname(__FILE__).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry", $serviziCameraEntity);

$form->addTitleForm("Servizi Camera Management");
$form->addSection('servizi camera details');
$form->addText("nome", "Nome", 255, MANDATORY);
$form->addEditor("descrizione", "Descrizione");
$form->addText("prezzo", "Prezzo", 40);

$main->setContent("body", $form->requestAction());

$main->close();