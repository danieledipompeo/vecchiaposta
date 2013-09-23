<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
//require_once(realpath(dirname(__FILE__)) . '/contents/system/entities/entitySlider.php');

/* recupero delle entity necessarie */
$sliderEntity = $GLOBALS['sys_slider'];
$imageEntity = $GLOBALS['sys_image'];
$imageSliderRelation = $GLOBALS['sys_image_sys_slider'];
$offertaEntity = $GLOBALS['sys_news'];
$cameraEntity = $GLOBALS['vp_room'];

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$welcomePage = new Skinlet('welcome');
$page = new Content($pageEntity);
$page->setFilter('title', 'Il B&B');
$page->forceSingle();
$page->apply($welcomePage);

$offertaPage = new Skinlet("offerta_home");
$offertaContent = new Content($offertaEntity);
$offertaContent->setLimit(1);
$offertaContent->setOrderFields("id");
$offertaContent->forceSingle();
$offertaContent->apply($offertaPage);

$servicePage = new Skinlet('servizi_offerti');
$page2 = new Content($pageEntity);
$page2->setFilter('title', 'Alcuni servizi offerti del B&B');
$page2->forceSingle();
$page2->apply($servicePage);

$homeTemplate = new Skinlet("home");
$homeTemplate->setContent("welcomePage", $welcomePage->get());
$homeTemplate->setContent("servicePage", $servicePage->get());
$homeTemplate->setContent("offertaPage", $offertaPage->get());

/*skinlet slider: skins/theme/sliderHome.html*/
$sliderTemplate = new Skinlet('sliderHome');
$slider = new Content($sliderEntity, $imageSliderRelation, $imageEntity);
$slider->forceSingle();
$slider->setFilter('titolo', 'sliderHome');
$slider->apply($sliderTemplate, 'slider');

/*retrieve all room*/
$cameraContent = new Content($cameraEntity);
$cameraContent->apply($sliderTemplate,'room');

$main->setContent('slider', $sliderTemplate->get());
$main->setContent("body", $homeTemplate->get());

$main->close();