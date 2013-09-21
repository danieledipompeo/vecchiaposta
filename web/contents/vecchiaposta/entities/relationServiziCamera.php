<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.10
 * @author dipompeodaniele@gmail.com
 */

require_once realpath(dirname(__FILE__)) .'/core.php';
require_once realpath(dirname(__FILE__)) .'/entityCamera.php';
require_once realpath(dirname(__FILE__)) .'/entityServiziCamera.php';

$serviziCameraRelation = new Relation($cameraEntity, $serviziCameraEntity);