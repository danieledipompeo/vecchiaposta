<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniele
 * Date: 16/09/13
 * Time: 17.50
 * To change this template use File | Settings | File Templates.
 */
session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');
require_once(realpath(dirname(__FILE__)) . '/contents/vecchiaposta/entities/entitySlider.php');

$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

$main->close();