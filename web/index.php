<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
require_once(realpath(dirname(__FILE__)).'/contents/vecchiaposta/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$welcomePage = new Skinlet('welcome');
$page = new Content($pageEntity);
$page->setFilter('id', '13');
$page->forceSingle();
$page->apply($welcomePage);
$main->setContent("welcomePage", $welcomePage->get());

$main->close();