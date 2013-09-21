<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
require_once(realpath(dirname(__FILE__)) . '/contents/vecchiaposta/entities/entityCamera.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$cameraContent = new Content($cameraEntity, $serviziCameraRelation, $serviziCameraEntity,
    $serviziCameraRelation, $cameraEntity, $cameraImageRelation, $imageEntity);
//$cameraContent->setFilter('id','1');
//$cameraContent->forceSingle();

$main->setContent("body", $cameraContent->get());

$main->close();