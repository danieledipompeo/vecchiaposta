<?php

require_once realpath(dirname(__FILE__)) .'/entityTopic.php';
require_once realpath(dirname(__FILE__)) .'/entityGruppoRicerca.php';

$gruppoRicercaTopicRelation = new Relation($topicEntity, $gruppoRicercaEntity);
?>