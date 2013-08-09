<?php
class EntityProgrammaDiRicerca extends Entity{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->addField("titolo",VARCHAR,50);
		$this->addField("descrizione", TEXT);
		$this->addField("triennio",VARCHAR,15,MANDATORY);
		$this->setPresentation("%titolo %triennio");
		$this->setTextSearchFields("titolo","triennio","descrizione");
		$this->setTextSearchScript("programma_di_ricerca.php?programma_di_ricerca_id=");
	}
}

$programmaDiRicercaEntity=new EntityProgrammaDiRicerca($database,"programma_di_ricerca");
?>
