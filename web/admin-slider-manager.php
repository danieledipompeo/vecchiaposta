<?php

session_start();

require "include/beContent.inc.php";
require "include/auth.inc.php";
require_once 'include/content.inc.php';
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$sliderEntity);

$form->addTitleForm("Slider Management");
$form->addSection('slider details');
$form->addText("titolo", "Titolo", 40, MANDATORY);
$form->addText("descrizione", "Descrizione", 40);
$form->addText("width", "Largezza", 40, MANDATORY);
$form->addText("height", "Altezza",40);

$main->setContent("body", $form->requestAction());

$main->close();