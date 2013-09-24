<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$dintorniContent = new Content($dintorniEntity);

if (isset ($_REQUEST['vp_dintorni_id'])){
    $dintorniTemplate = new Skinlet('single/vp_dintorni_single');

    $mapWidget = new Skinlet('widget/widget_map');
    $dintorniContent->setFilter('id', $_REQUEST['vp_dintorni_id']);
    $dintorniContent->forceSingle();
    $dintorniContent->apply($mapWidget, 'dintorni');

    $cameraContent = new Content($cameraEntity);
    $cameraContent->apply($dintorniTemplate, 'room');

    $dintorniTemplate->setContent('widget_map', $mapWidget->get());
    $dintorniContent->apply($dintorniTemplate);
    $main->setContent("body", $dintorniTemplate->get());
}else{
    $main->setContent("body", $dintorniContent->get());
}

$main->close();