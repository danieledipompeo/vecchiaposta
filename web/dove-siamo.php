<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$doveSiamoTemplate = new Skinlet('dove-siamo');

$cameraContent = new Content($cameraEntity);
$cameraContent->apply($doveSiamoTemplate, 'room');

if(isset($_REQUEST['sys_page_id']))
{
    $page = new Content($pageEntity);
    $page->setFilter('id', $_REQUEST['sys_page_id']);
    $page->forceSingle();
    $page->apply($doveSiamoTemplate, 'page');
}

$main->setContent("body", $doveSiamoTemplate->get());

$main->close();