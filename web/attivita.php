<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$attivitaContent = new Content($attivitaEntity);

if (isset($_REQUEST['vp_attivita_id']) ){
    $attivitaTemplate = new Skinlet('single/vp_attivita_single');
    $attivitaContent->setFilter('id',$_REQUEST['vp_attivita_id']);
    $attivitaContent->forceSingle();
    $attivitaContent->apply($attivitaTemplate, 'attivita');

    $cameraContent = new Content($cameraEntity);
    $cameraContent->apply($attivitaTemplate, 'room');
    $main->setContent("body", $attivitaTemplate->get());

}else{
    $attivitaContent = new Content($attivitaEntity);
    $main->setContent("body", $attivitaContent->get());
}

$main->close();