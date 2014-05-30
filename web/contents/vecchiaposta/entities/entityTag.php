<?php
/**
 * User: daniele
 * Date: 23/09/13
 * Time: 16.14
 * @author dipompeodaniele@gmail.com
 */

class EntityTag extends Entity
{
    public function __construct($database, $name,$owner="")
    {
        parent::__construct($database,$name,$owner);
        $this->addField('nome', VARCHAR, 255, MANDATORY);
        $this->addField('peso', VARCHAR, 255, MANDATORY);
        $this->addField('url', VARCHAR, 255, MANDATORY);
        $this->setPresentation("nome");
    }
}

$config = Config::getInstance()->getConfigurations();
$tagEntity = new EntityTag($database,$config['database']['prefix'].'tag');