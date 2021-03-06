<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.10
 * @author dipompeodaniele@gmail.com
 */

require_once realpath(dirname(__FILE__)) . '/entityCamera.php';
require_once realpath(dirname(__FILE__)) . '/entityServiziCamera.php';
require_once realpath(dirname(__FILE__)) . '/entityEventi.php';
require_once realpath(dirname(__FILE__)) . '/entityDintorni.php';
require_once realpath(dirname(__FILE__)) . '/entityAttivita.php';
require_once realpath(dirname(__FILE__)) . '/entityOfferta.php';
require_once realpath(dirname(__FILE__)) . '/entityTag.php';

require_once realpath(dirname(__FILE__)) . '/relationServiziCamera.php';
require_once realpath(dirname(__FILE__)) . '/relationCameraFoto.php';
require_once realpath(dirname(__FILE__)) . '/relationAttivitaFoto.php';
require_once realpath(dirname(__FILE__)) . '/relationDintorniFoto.php';
require_once realpath(dirname(__FILE__)) . '/relationEventiFoto.php';


/*entities*/
$cameraEntity->connect();
$serviziCameraEntity->connect();
$eventiEntity->connect();
$dintorniEntity->connect();
$attivitaEntity->connect();
$offertaEntity->connect();
$tagEntity->connect();
/*relation*/
$serviziCameraRelation->connect();
$cameraImageRelation->connect();
$attivitaImageRelation->connect();
$dintorniImageRelation->connect();
$eventiImageRelation->connect();