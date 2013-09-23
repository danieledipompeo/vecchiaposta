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

$form = new Form("dataEntry", $eventiEntity);

$form->addTitleForm("Evento Management");
$form->addSection('Evento details');
$form->addText("nome", "Nome", 255, MANDATORY);
$form->addEditor("descrizione", "Descrizione");
$form->addLongDate('data', 'Data');
$form->addText('luogo', 'Luogo', 255);

/*
$relationForm = new RelationForm("dataEntry3", $serviziCameraRelation);
$relationForm->addSection('Servizi da legare');
$relationForm->addRelationManager("vp_servizi_nome", "Servizi");
$form->triggers($relationForm);

$relationForm = new RelationForm("dataEntry4", $cameraImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm); */

$main->setContent("body", $form->requestAction());

$main->close();