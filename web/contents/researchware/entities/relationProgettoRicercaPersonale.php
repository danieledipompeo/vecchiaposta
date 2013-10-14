<?php

require_once realpath(dirname(__FILE__)) .'/entityProgettoRicerca.php';
require_once realpath(dirname(__FILE__)) .'/entityPersonale.php';

$progettoRicercaPersonaleRelation = new Relation($progettoRicercaEntity, $personaleEntity,"partecipazione_progetto");
?>