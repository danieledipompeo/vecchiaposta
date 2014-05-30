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
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry", $tagEntity);

$form->addTitleForm("Tag Management");
$form->addSection('Tag details');

$form->addText("nome", "Nome", 255, MANDATORY);
$form->addText("peso", "Peso", 255, MANDATORY);
$form->addText("url", "URL", 255, MANDATORY);

$main->setContent("body", $form->requestAction());

$main->close();