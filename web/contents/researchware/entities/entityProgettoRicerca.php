<?php

require_once realpath(dirname(__FILE__)) .'/entityGruppoRicerca.php';

class EntityProgettoRicerca extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("%nome");
		$this->addField("nome", VARCHAR, 20);
		$this->addField("descrizione", TEXT);
		$this->addField("dataInizio", DATE);
		$this->addField("dataFine", DATE);
		$this->setTextSearchFields("nome","descrizione");
		$this->setTextSearchScript("progetto_ricerca.php?progetto_ricerca_id=");
	}
	
	public function save($query_conditions)
	{
		$ricercatoreEntity = DB::getInstance()->getEntityByName('ricercatore');
		$ricercatoreEntity->retrieveOnly(array("user"=>$_SESSION["user"]["username"]));	
		if(isset($ricercatoreEntity->instances[0]))
		{
			$idRicercatore = $ricercatoreEntity->instances[0]->getKeyFieldValue();
			$query_conditions["responsabile"]=$idRicercatore;
		}
		return parent::save($query_conditions);
	}
}

$progettoRicercaEntity = new EntityProgettoRicerca($database,"progetto_ricerca");

?>