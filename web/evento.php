<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$eventiTemplate = new Skinlet('eventi');
$eventiContent = new Content($sliderEntity, $sliderPageRelation, $pageEntity);
$eventiContent->setFilter('sys_slider_titolo', 'sliderEventi');
$eventiContent->forceSingle();
$eventiContent->apply($eventiTemplate);

$main->setContent("body", $eventiTemplate->get());

$main->close();