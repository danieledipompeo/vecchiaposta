<?php

session_start();

require "include/beContent.inc.php";
require "include/auth.inc.php";
require_once 'include/content.inc.php';
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new ImageForm("dataEntry",$imageEntity);

$form->addTitleForm("Image Management");
$form->addSection('image details');
$form->addImage("filename", "Titolo",'off',$imageEntity);
$form->addText('test', 'titolo');

//$form->addSelectFromReference($sliderEntity, 'slider', 'slider');

$main->setContent("body", $form->requestAction());

$main->close();