<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);


$eventiContent = new Content($eventiEntity);
if(isset($_REQUEST['vp_eventi_id'])){
    $eventiTemplate = new Skinlet('single/vp_eventi_single');
    $eventiContent->setFilter('id',$_REQUEST['vp_eventi_id']);
    $eventiContent->forceSingle();
    $eventiContent->apply($eventiTemplate, "eventi");
    $cameraContent = new Content ($cameraEntity);
    $cameraContent->apply($eventiTemplate, "room");
    $main->setContent("body", $eventiTemplate->get());
}else{
    $main->setContent("body", $eventiContent->get());
}

$main->close();