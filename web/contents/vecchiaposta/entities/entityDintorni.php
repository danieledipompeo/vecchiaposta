<?php
/**
 * User: daniele
 * Date: 23/09/13
 * Time: 16.14
 * @author dipompeodaniele@gmail.com
 */

class EntityDintorni extends Entity
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('descrizione', TEXT);
        $this->addField('nome', VARCHAR, 255, MANDATORY);
        $this->addField('latitudine', VARCHAR, 255);
        $this->addField('longitudine', VARCHAR, 255);
        $this->setPresentation("nome");
    }
}

$dintorniEntity = new EntityDintorni($database,
    Config::getInstance()->getConfigurations()['database']['prefix'].'dintorni');

$dintorniEntity->addReference($imageEntity, 'foto');