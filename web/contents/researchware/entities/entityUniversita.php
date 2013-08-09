<?php
class EntityUniversita extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->addField("nome", VARCHAR,50);
		$this->setPresentation("%nome");
		$this->setTextSearchFields("nome");
		$this->setTextSearchScript("universita.php?universita_id=");
	}
}
$universitaEntity = new EntityUniversita($database, "universita");

?>
