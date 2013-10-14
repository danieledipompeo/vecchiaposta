<?php
/**
 * User: daniele
 * Date: 23/09/13
 * Time: 16.14
 * @author dipompeodaniele@gmail.com
 */

class EntityOfferta extends EntityNews
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('suggest', TEXT);
        $this->addField('prezzo', INT);
    }
}

$offertaEntity = new EntityOfferta($database,
    Config::getInstance()->getConfigurations()['database']['prefix'].'offerta');
