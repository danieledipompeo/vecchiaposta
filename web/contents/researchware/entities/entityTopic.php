<?php

class EntityTopic extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("nome");
		$this->addField("nome", VARCHAR, 50, MANDATORY); //nome del topic
		$this->addField("descrizione", TEXT);
		$this->setTextSearchFields("nome");
		$this->setTextSearchScript("topic.php?topic_id=");
	}
	
	public function save($query_conditions)
	{
		$ricercatoreEntity = DB::getInstance()->getEntityByName('ricercatore');
		$ricercatoreEntity->retrieveOnly(array("user"=>$_SESSION["user"]["username"]));	
		if(isset($ricercatoreEntity->instances[0]))
		{
			$idRicercatore = $ricercatoreEntity->instances[0]->getKeyFieldValue();
			$query_conditions["autore"]=$idRicercatore;
		}
		return parent::save($query_conditions);
	}
}
$topicEntity = new EntityTopic($database, "topic");
?>
