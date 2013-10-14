<?php

require_once realpath(dirname(__FILE__)) .'/entityDocente.php';
require_once realpath(dirname(__FILE__)) .'/entityCorso.php';

/**
 * there's no need to extend this relation, remember that this relation is the
 * E-R n-m relationship entity, it'll be translated in a DB table 
 */
$docentiCorsiRelation = new Relation($corsoEntity,$docenteEntity,"titolari","id_corso","id_personale");
?>