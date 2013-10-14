<?php

require_once realpath(dirname(__FILE__)) .'/entityDipartimento.php';

class EntitySede extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->addField("nome", VARCHAR, 100);
		$this->addField("cap", VARCHAR, 5);
		$this->addField("citta", VARCHAR, 200);
		$this->addField("indirizzo", VARCHAR, 255);
		$this->addField("tipo", VARCHAR, 100);
		$this->setPresentation("nome");
		$this->setTextSearchFields("nome" , "citta" , "indirizzo");
		$this->setTextSearchScript("sede.php?sede_id=");
	}
}

$sedeEntity = new EntitySede($database, "sede");


?>