<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniele
 * Date: 05/08/13
 * Time: 14.38
 * To change this template use File | Settings | File Templates.
 */

require_once realpath(dirname(__FILE__)) .'/entitySlider.php';
require_once realpath(dirname(__FILE__)).'/relationImageSlider.php';

$sliderEntity->connect();

$imageSliderRelation->connect();
