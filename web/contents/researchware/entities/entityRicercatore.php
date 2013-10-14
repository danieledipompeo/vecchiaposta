<?php

require_once realpath(dirname(__FILE__)) .'/entityArea.php';
/**
 * Defining the new domain class through entity inheritance
 * @author nicola
 *
 */
class EntityRicercatore extends EntityPersonale
{
	public function __construct($database,$name)
	{
		$this->entityName = "ricercatore";
		parent::__construct($database, $name);
		$this->addField("curriculum", VARCHAR, 255);
	}
	
	public function save($query_condition)
	{
		$query_condition["tipo"]="r";
		return parent::save($query_condition);
	}
}

/**
 * Instantiating the class in framework Domain
 */
$ricercatoreEntity = new EntityRicercatore($database,"personale");
?>