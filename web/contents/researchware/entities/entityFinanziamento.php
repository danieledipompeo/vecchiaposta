<?php
class EntityFinanziamento extends Entity{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->addField("ente_erogatore", VARCHAR,50);
		$this->addField("somma_erogata", INT, 3, MANDATORY);
		$this->addField("data_erogazione",LONGDATE,MANDATORY);
		$this->setPresentation("%ente_erogatore %data_erogazione");
		$this->setTextSearchFields("ente_erogatore");
		$this->setTextSearchScript("finanziamento.php?finanziamento_id=");
	}
}

$finanziamentoEntity=new EntityFinanziamento($database,"finanziamento");
?>