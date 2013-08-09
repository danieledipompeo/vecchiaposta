<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniele
 */

require_once realpath(dirname(__FILE__)) .'/../../system/entities/entityImage.php';

class EntitySlider extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name);
        $this->addField("titolo", VARCHAR,50);
        $this->addField('descrizione',TEXT);
        $this->addField('effetto',TEXT);
        $this->addField('width',INT);
        $this->addField('height',INT);
        $this->setPresentation("%titolo");
        //$this->setTextSearchFields("nome");
        //$this->setTextSearchScript("area.php?area_id=");
    }

    public function save($query_conditions)
    {
        /*$docenteEntity = DB::getInstance()->getEntityByName('docente');
        $servicesEntity = DB::getInstance()->getEntityByName('sys_service');
        $usersGroupsRelation = DB::getInstance()->getEntityByName('sys_user_sys_group');
        $serviceLoaded = false;
        $docenteLoaded = false;
        if ( $docenteEntity->retrieveOnly( array('id'=>$query_conditions['direttore'])) && $query_conditions['direttore'] != '0' )
        {
            $docenteLoaded = true;
            $docente = $docenteEntity->instances[0];
        }

        if ( $servicesEntity->retrieveOnly( array('script'=>'direttore-area-manager.php')) )
        {
            $serviceLoaded = true;
            $service = $servicesEntity->instances[0];
        }

        if($serviceLoaded && $docenteLoaded)
        {
            $setValues = array (
                'username_sys_user' => $docente->getFieldValue('user'),
                'id_sys_group' => $service->getKeyFieldValue()
            );
            $usersGroupsRelation->save($setValues);
        }*/

        parent::save($query_conditions);
    }

    public function update($where_conditions, $set_parameters)
    {
        /*$docenteEntity = DB::getInstance()->getEntityByName('docente');
        $servicesEntity = DB::getInstance()->getEntityByName('sys_service');
        $usersGroupsRelation = DB::getInstance()->getEntityByName('sys_user_sys_group');
        $serviceLoaded = false;
        $docenteLoaded = false;
        if ( $docenteEntity->retrieveOnly( array('id'=>$set_parameters['direttore'])) && $set_parameters['direttore'] != '0' )
        {
            $docenteLoaded = true;
            $docente = $docenteEntity->instances[0];
        }

        if ( $servicesEntity->retrieveOnly( array('script'=>'direttore-area-manager.php')) )
        {
            $serviceLoaded = true;
            $service = $servicesEntity->instances[0];
        }

        if($serviceLoaded && $docenteLoaded)
        {
            $setValues = array (
                'username_sys_user' => $docente->getFieldValue('user'),
                'id_sys_group' => $service->getKeyFieldValue()
            );
            $usersGroupsRelation->save($setValues);
        } */
        parent::update($where_conditions, $set_parameters);
    }

}
/**
 * Instantiating the class in framework Domain
 */
$sliderEntity = new EntitySlider($database, "slider");
