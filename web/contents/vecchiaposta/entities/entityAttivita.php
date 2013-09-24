<?php
/**
 * User: daniele
 * Date: 23/09/13
 * Time: 16.14
 * @author dipompeodaniele@gmail.com
 */

class EntityAttivita extends Entity
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('descrizione', TEXT);
        $this->addField('nome', VARCHAR, 255, MANDATORY);
        $this->addField('data', LONGDATE);
        $this->addField('luogo', VARCHAR, 255);
        $this->addField('suggest', TEXT);
    }
}

$attivitaEntity = new EntityAttivita($database,
    Config::getInstance()->getConfigurations()['database'][$_SERVER['SERVER_NAME']]['prefix'].'attivita');