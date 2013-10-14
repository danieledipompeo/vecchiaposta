<?php

require_once realpath(dirname(__FILE__)) .'/entityGruppoRicerca.php';

class RelationPartecipazione extends Relation
{
	public function __construct($entity_1, $entity_2,$name)
	{
		parent::__construct($entity_1, $entity_2,$name);
		$this->setPresentation('%nome');
		$this->addField('tempo_impegato', INT, 3, MANDATORY);
	}	
}

$partecipazioneRelation = new RelationPartecipazione($personaleEntity, $gruppoRicercaEntity,'partecipazione');

?>