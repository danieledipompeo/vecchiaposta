<?php

require_once realpath(dirname(__FILE__)) .'/entityUniversita.php';
require_once realpath(dirname(__FILE__)) .'/entityDipartimento.php';
require_once realpath(dirname(__FILE__)) .'/entityArea.php';
require_once realpath(dirname(__FILE__)) .'/entitySede.php';
require_once realpath(dirname(__FILE__)) .'/entityPersonale.php';
require_once realpath(dirname(__FILE__)) .'/entityGruppoRicerca.php';
require_once realpath(dirname(__FILE__)) .'/relationGruppoRicercaPersonale.php';
require_once realpath(dirname(__FILE__)) .'/entityProgettoRicerca.php';
require_once realpath(dirname(__FILE__)) .'/entityRicercatore.php';
require_once realpath(dirname(__FILE__)) .'/entityDocente.php';
require_once realpath(dirname(__FILE__)) .'/entityPubblicazione.php';
require_once realpath(dirname(__FILE__)) .'/entityCorso.php';
require_once realpath(dirname(__FILE__)) .'/relationDocentiCorso.php';
require_once realpath(dirname(__FILE__)) .'/entityTopic.php';
require_once realpath(dirname(__FILE__)) .'/entityFinanziamento.php';
require_once realpath(dirname(__FILE__)) .'/relationGruppoRicercaTopic.php';
require_once realpath(dirname(__FILE__)) .'/relationProgettoRicercaTopic.php';
require_once realpath(dirname(__FILE__)) .'/relationProgettoRicercaPersonale.php';
require_once realpath(dirname(__FILE__)) .'/relationPersonaleTopic.php';
require_once realpath(dirname(__FILE__)) .'/entityProgrammaDiRicerca.php';
require_once realpath(dirname(__FILE__)) .'/relationCore.php';

/**
 * Struttura Università
 */
$universitaEntity->connect();
$dipartimentoEntity->connect();
$areaEntity->connect();
$sedeEntity->connect();

/**
 * Dominio Applicativo per la ricerca
 */
$gruppoRicercaEntity->connect();
$partecipazioneRelation->connect();
$progettoRicercaEntity->connect();

/**
 * Collegamento con il portale della didattica
 */
$personaleEntity->connect();
$ricercatoreEntity->connect();
$docenteEntity->connect();
$corsoEntity->connect();
$docentiCorsiRelation->connect();
$pubblicazioneEntity->connect();

/**
 * Relazioni tra i gruppi di ricerca i progetti di ricerca e i topic
 */
$topicEntity->connect();
$gruppoRicercaTopicRelation->connect();
$progettoRicercaTopicRelation->connect();
$progettoRicercaPersonaleRelation->connect();
$personaleTopicRelation->connect();
$docenteTopicRelation->connect();


$finanziamentoEntity->connect();
$programmaDiRicercaEntity->connect();
?>