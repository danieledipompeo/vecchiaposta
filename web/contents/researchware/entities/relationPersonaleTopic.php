<?php

require_once realpath(dirname(__FILE__)) .'/entityProgettoRicerca.php';
require_once realpath(dirname(__FILE__)) .'/entityTopic.php';

$personaleTopicRelation = new Relation($personaleEntity, $topicEntity);
$docenteTopicRelation = new Relation($docenteEntity, $topicEntity,"personale_topic","id_personale","id_topic");