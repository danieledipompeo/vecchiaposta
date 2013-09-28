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

$form = new Form("dataEntry", $dintorniEntity);

$form->addTitleForm("Dintorni Management");
$form->addSection('Dintorni details');
$form->addText("nome", "Nome", 255, MANDATORY);
$form->addEditor("descrizione", "Descrizione");
$form->addText('luogo', 'Luogo', 255);
$form->addText('latitudine', 'Latitudine', 255);
$form->addText('longitudine', 'Longitudine', 255);

$imageForm = new ImageForm('imageEntry',$dintorniEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);

$relationForm = new RelationForm("dataEntry4", $dintorniImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm);

/*
$relationForm = new RelationForm("dataEntry3", $serviziCameraRelation);
$relationForm->addSection('Servizi da legare');
$relationForm->addRelationManager("vp_servizi_nome", "Servizi");
$form->triggers($relationForm);*/

$main->setContent("body", $form->requestAction());

$main->close();