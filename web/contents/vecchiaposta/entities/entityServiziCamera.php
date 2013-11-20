<?php
/**
 * User: daniele
 * Date: 21/09/13
 * Time: 12.10
 * @author dipompeodaniele@gmail.com
 */


class EntityServizi extends Entity
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('descrizione', TEXT);
        $this->addField('nome', VARCHAR, 255, MANDATORY);
        $this->addField('prezzo', INT);
        $this->setPresentation("nome");
    }
}

$serviziCameraEntity = new EntityServizi($database,
    Config::getInstance()->getConfigurations()['database']['prefix']."servizi");