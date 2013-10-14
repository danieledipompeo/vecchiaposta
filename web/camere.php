<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
require_once(realpath(dirname(__FILE__)) . '/contents/vecchiaposta/entities/entityCamera.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

if(isset($_REQUEST['vp_room_id'])){
    $cameraContent = new Skinlet('single/vp_room_single');
    $cameraServiziContent = new Content($cameraEntity, $serviziCameraRelation, $serviziCameraEntity);
    $cameraServiziContent->apply($cameraContent, 'servizi');
    $cameraFotoContent = new Content($cameraEntity, $cameraImageRelation, $imageEntity);
    $cameraFotoContent->apply($cameraContent, 'foto');
}
else{
    $cameraContent = new Content($cameraEntity, $imageEntity);
}

$main->setContent("body", $cameraContent->get());

$main->close();