<?php

require_once realpath(dirname(__FILE__)) .'/entityProgettoRicerca.php';
require_once realpath(dirname(__FILE__)) .'/entityTopic.php';

$progettoRicercaTopicRelation = new Relation($progettoRicercaEntity, $topicEntity);
$progettoRicercaTopicRelation->setPresentation("(%nome)");