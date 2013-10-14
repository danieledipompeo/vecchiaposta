<?php


class EntityPubblicazione extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("%titolo");
		$this->addField("titolo", VARCHAR, 150);
		$this->addField("testo", TEXT);
		$this->addField("dataPubblicazione", DATE);
		$this->setTextSearchFields("titolo","descrizione");
		$this->setTextSearchScript("pubblicazione.php?pubblicazione_id=");
	}
}

$pubblicazioneEntity = new EntityPubblicazione($database,"pubblicazione");
?>