<?php
require_once realpath(dirname(__FILE__)) .'/core.php'; 



function init($usersEntity) {

	if(!$usersEntity->retrieveAndLink() && Settings::getModMode())
	{
		$values_conditions=array();

		/**
		 * default User of the application
		*/

		$GLOBALS['usersEntity']->insertItem(array(
				"username" 	=> Config::getInstance()->getConfigurations()['defaultuser']['username'],
				"password"	=> md5(Config::getInstance()->getConfigurations()['defaultuser']['password']),
				"email"		=> Config::getInstance()->getConfigurations()['defaultuser']['email'],
				"name"		=> Config::getInstance()->getConfigurations()['defaultuser']['name'],
				"surname"	=> Config::getInstance()->getConfigurations()['defaultuser']['surname'])
		);

		$GLOBALS['groupsEntity']->insertItem("1", "Administrator", "Administration Group.");
		$GLOBALS['usersGroupsRelation']->insertItem(null,Config::getInstance()->getConfigurations()['defaultuser']['username'],"1");

		/**
		 * System services category initialization
		*/

		$GLOBALS['servicecategoryEntity']->insertItem(array(
				"id" 		=> "1",
				"name"		=> "System",
				"position" 	=> "1")
		);




		$GLOBALS['servicecategoryEntity']->insertItem(array(
				"id" 		=> "2",
				"name"		=> "Content",
				"position" 	=> "2")
		);



		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "1",
				"name"		=> "Login",
				"script"	=> "admin-login.php",
				"entry"		=> "Login",
				"servicecategory" => "0",
				"visible"	=> "*",
				"des"		=> "Login service",
				"id_entities" => "",
				"position"	=> "1")
		);


		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "2",
				"name"		=> "Logout",
				"script"	=> "admin-logout.php",
				"entry"		=> "Logout",
				"servicecategory" => "0",
				"visible"	=> "*",
				"des"		=> "Logout service",
				"id_entities" => "",
				"position"	=> "2")
		);



		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "3",
				"name"		=> "User Management",
				"script"	=> "admin-users-manager.php",
				"entry"		=> "Users",
				"servicecategory" => "1",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "1")
		);

		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "4",
				"name"		=> "Group Management",
				"script"	=> "admin-groups-manager.php",
				"entry"		=> "Groups",
				"servicecategory" => "1",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "2")
		);

		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "5",
				"name"		=> "Service Management",
				"script"	=> "admin-services-manager.php",
				"entry"		=> "Services",
				"servicecategory" => "1",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "3")
		);

		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "6",
				"name"		=> "Service Category Management",
				"script"	=> "admin-servicecategory-manager.php",
				"entry"		=> "Service Categories",
				"servicecategory" => "1",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "4")
		);


		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "7",
				"name"		=> "Page Management",
				"script"	=> "admin-pages-manager.php",
				"entry"		=> "Pages",
				"servicecategory" => "2",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "1")
		);

		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "8",
				"name"		=> "Menu Management",
				"script"	=> "admin-menu-manager.php",
				"entry"		=> "Menu",
				"servicecategory" => "2",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "2")
		);

		$GLOBALS['servicesEntity']->insertItem(array(
				"id"		=> "10",
				"name"		=> "News",
				"script"	=> "admin-news-manager.php",
				"entry"		=> "News",
				"servicecategory" => "2",
				"visible"	=> "*",
				"des"		=> "",
				"id_entities" => "",
				"position"	=> "4")
		);
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"1","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"2","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"3","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"4","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"5","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"6","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"7","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"8","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"9","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"10","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"11","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"12","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"13","1");
		$GLOBALS['servicesGroupsRelation']->insertItem(null,"14","1");

	}
}
init($usersEntity);
?>