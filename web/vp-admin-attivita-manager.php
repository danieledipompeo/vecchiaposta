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

$form = new Form("dataEntry", $attivitaEntity);

$form->addTitleForm("Attività Management");
$form->addSection('Attività details');
$form->addText("nome", "Nome", 255, MANDATORY);
$form->addEditor("descrizione", "Descrizione");
$form->addText('luogo', 'Luogo', 255);
$form->addText('latitudine', 'Latitudine', 255);
$form->addText('longitudine', 'Longitudine', 255);
$form->addEditor('suggest', 'Suggerimenti');

$imageForm = new ImageForm('imageEntry',$attivitaEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);

$relationForm = new RelationForm("dataEntry4", $attivitaImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm);

/*
$relationForm = new RelationForm("dataEntry3", $serviziCameraRelation);
$relationForm->addSection('Servizi da legare');
$relationForm->addRelationManager("vp_servizi_nome", "Servizi");
$form->triggers($relationForm); */

$main->setContent("body", $form->requestAction());

$main->close();