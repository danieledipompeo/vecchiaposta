<?php
/**
 * @author dipompeodaniele@gmail.com
 */

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$bookingTemplate = new Skinlet("booking");


if(isset($_POST['vp_room_id']) && $_POST['vp_room_id'] !='' ){
    $room = new Content($cameraEntity);
    $room->setFilter('id', $_POST['vp_room_id']);
    $room->forceSingle();
}
else{
    $room = new Content($cameraEntity);
}

if( isset($_GET['vp_offerta_id']) ){
    $offertaContent = new Content($offertaEntity);
    $offertaContent->setFilter('id',$_GET['vp_offerta_id']);
    $offertaContent->forceSingle();
    $offertaContent->apply($bookingTemplate, 'offerta');
}

$room->apply($bookingTemplate, 'room');

$bookingTemplate->setContent('night', $_POST['nights']);
$bookingTemplate->setContent('from', $_POST['datefrom']);
$bookingTemplate->setContent('to', $_POST['dateto']);
$bookingTemplate->setContent('nomecliente', $_POST['nomecliente']);

$main->setContent('body', $bookingTemplate->get());
$main->close();