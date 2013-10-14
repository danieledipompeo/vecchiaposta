<?php
class EntityPersonale extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("nome" , "cognome");
		$this->addField("nome", VARCHAR,30);
		$this->addField("cognome",VARCHAR,30);
		$this->addField("tipo",VARCHAR,1);
		$this->addField("skype", VARCHAR, 45);
		$this->addField("msn", VARCHAR, 45);
		$this->addField("ufficio", VARCHAR, 200);
		$this->addField("telefono", VARCHAR, 100);
		$this->addField("email", VARCHAR, 255);
		$this->addField("link", VARCHAR,100);
		$this->addField("modifica", VARCHAR, 20);
	}
	
	
}

$personaleEntity=new EntityPersonale($database,"personale");

?> 