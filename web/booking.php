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


if(isset($_POST['id_room']) && $_POST['id_room'] !='' ){
    $room = new Content($cameraEntity);
    $room->setFilter('id', $_POST['id_room']);
    $room->forceSingle();
}
else{
    $room = new Content($cameraEntity);

}

$room->apply($bookingTemplate);

$bookingTemplate->setContent('night', $_POST['nights']);
$bookingTemplate->setContent('from', $_POST['from']);
$bookingTemplate->setContent('to', $_POST['to']);

$main->setContent('body', $bookingTemplate->get());
$main->close();