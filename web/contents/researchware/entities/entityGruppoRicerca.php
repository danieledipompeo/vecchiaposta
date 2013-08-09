<?php
class EntityGruppoRicerca extends Entity
{
	public function __construct($database, $name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("nome");
		$this->addField("nome", VARCHAR, 255);
		$this->addField("backgroundScientifico", TEXT);
		$this->setTextSearchFields("nome");
		$this->setTextSearchScript("gruppo_ricerca.php?gruppo_ricerca_id=");
	}
}

$gruppoRicercaEntity = new EntityGruppoRicerca($database,"gruppo_ricerca");
?>