<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.10
 * @author dipompeodaniele@gmail.com
 */

require_once realpath(dirname(__FILE__)) .'/core.php';
require_once realpath(dirname(__FILE__)) .'/entityAttivita.php';
require_once realpath(dirname(__FILE__)) .'/../../system/entities/entityImage.php';

$eventiImageRelation = new Relation($eventiEntity, $imageEntity);