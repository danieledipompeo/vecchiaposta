<?php

require_once realpath(dirname(__FILE__)) .'/entityUniversita.php';
/**
 * Defining the new domain class through entity inheritance
 * @author nicola
 *
 */
class EntityDipartimento extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->addField("nome", VARCHAR,50);
		$this->addField('descrizione', TEXT);
		$this->setPresentation("%nome");
		$this->setTextSearchFields("nome", 'descrizione');
		$this->setTextSearchScript("dipartimento.php?dipartimento_id=");
		
	}
}
/**
 * Instantiating the class in framework Domain
 */
$dipartimentoEntity = new EntityDipartimento($database, "dipartimento");
/**
 * Setting relationships with other entities
 */

?>