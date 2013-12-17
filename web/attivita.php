<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

if (isset($_REQUEST['vp_attivita_id']) ){
    $attivitaContent = new Content($attivitaEntity);
    $attivitaTemplate = new Skinlet('single/vp_attivita_single');
    $attivitaContent->setFilter('id',$_REQUEST['vp_attivita_id']);
    $attivitaContent->forceSingle();


    $mapWidget = new Skinlet('widget/widget_map');
    $attivitaContent = new Content($attivitaEntity);
    $attivitaContent->setFilter('id', $_REQUEST['vp_attivita_id']);
    $attivitaContent->forceSingle();
    $attivitaContent->apply($mapWidget, 'map');
    $attivitaTemplate->setContent('widget_map', $mapWidget->get());

    $attivitaContent->apply($attivitaTemplate);
    $main->setContent("body", $attivitaTemplate->get());

}else{
    $attivita = new Content($attivitaEntity, $imageEntity);
    $main->setContent("body", $attivita->get());
}

$main->close();