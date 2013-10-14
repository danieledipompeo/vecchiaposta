<?php

require_once realpath(dirname(__FILE__)) .'/entityArea.php';
/**
 * Defining the new domain class through entity inheritance
 * @author nicola
 *
 */
class EntityDocente extends EntityPersonale
{
	public function __construct($database,$name)
	{
		$this->entityName = "docente";
		parent::__construct($database, $name);
		$this->addField("ricevimento", VARCHAR, 100);
		$this->addField("curriculum", TEXT);
		$this->setTextSearchFields("nome", "cognome","ufficio");
		$this->setTextSearchScript("personale.php?personale_id=");
	}
	
	public function save($query_condition)
	{
		$query_condition["tipo"]="d";
		return parent::save($query_condition);
	}
	
	public function update($where_conditions, $set_parameters)
	{
		$set_parameters["tipo"]="d";
		return parent::update($where_conditions, $set_parameters);
	}
	
	public function retrieveOnly($where_conditions=null, $join_entities=null, $order_conditions=null, $limit_condition=null) 
	{
		$where_conditions['tipo'] = 'd';
		return parent::retrieveOnly($where_conditions, $join_entities, $order_conditions, $limit_condition);	
	}
}

/**
 * Instantiating the class in framework Domain
 */
$docenteEntity = new EntityDocente($database,"personale");


$docenteEntity->addReference($imageEntity,"foto");


?>