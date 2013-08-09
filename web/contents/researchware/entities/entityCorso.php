<?php
/**
 * Defining the new domain class through entity inheritance
 * @author nicola
 *
 */
class EntityCorso extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database, $name);
		$this->addField("nome",VARCHAR,100);
		$this->addField("codice",VARCHAR,10);
		$this->addField("ssd",VARCHAR,10);
		$this->addField("semestre",INT);
		$this->addField("attivo",VARCHAR,1);
		$this->addField("link",VARCHAR,100);
		$this->addField("lingua", VARCHAR, 50);
		$this->addField("tipo", VARCHAR, 50);
		$this->addField("cfu", INT, 3);
		$this->addField("descrizione", TEXT);
		$this->setPresentation("%nome");
		$this->setTextSearchFields("nome","codice","ssd",'descrizione');
		$this->setTextSearchScript("corso.php?corso_id=");
	}
}
/**
 * Instantiating the class in framework domain
 */
$corsoEntity = new EntityCorso($database,"corso");
?>
