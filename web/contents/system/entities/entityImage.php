<?php

require_once(realpath(dirname(__FILE__)).'/entitySlider.php');

class EntityImage extends EntityFile
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name,WITH_OWNER);
	}
	
	public function save($values_condition)
	{
		$values_condition["owner"] = $_SESSION["user"]["username"];
		return parent::save($values_condition);
	}
}

$imageEntity = new EntityImage($database,"sys_image");
$imageEntity->addReference($sliderEntity, 'slider');
