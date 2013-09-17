<?php
/* 
require_once (realpath(dirname(__FILE__)).'/../../skin.inc.php');
require_once (realpath(dirname(__FILE__)).'/../../skinlet.inc.php');
require_once (realpath(dirname(__FILE__)).'/../../beContent.inc.php');
require_once (realpath(dirname(__FILE__)).'/../../content.inc.php');
require_once (realpath(dirname(__FILE__)).'/../../entities.inc.php"'); 
 */

class InitGraphic{

	private static $instance;
	
	private function __construct(){}
	
	public static function getInstance()
	{
		if(! isset($instance) )
			self::$instance = new InitGraphic();
		return self::$instance;
	}
	
	/**
	 * 
	 * @param Skin $skin
	 * @param boolean $backEnd
	 */
	public function createGraphic($skin, $backEnd = false, $news = true)
	{
		$newsEntity = $GLOBALS['sys_news'];
		$pageEntity = $GLOBALS['sys_page'];
        $sliderEntity = $GLOBALS['slider'];

		if(!$backEnd)
		{
			$menuEntity = $GLOBALS['sys_menu'];
            $menuTemplate = new Skinlet('menu');
			$menu = new Content($menuEntity,$menuEntity);
			$menu->setFilter("parent_id", 0);
			$menu->setOrderFields("sys_menu_position",'sys_menu_parent',"sys_menu0_position");
            $menu->apply($menuTemplate);
			if($news){
				$news = new Content($newsEntity);
				$skin->setContent("news", $news->get());
			}
			$head = new Skinlet("frame-public-head");
            $slider = new Content($sliderEntity);
            $skin->setContent('slider', $slider->get());
		}
		else 
		{
			$servicecategoryEntity = $GLOBALS['sys_servicecategory'];
			$servicesEntity = $GLOBALS['sys_service'];
			$servicesGroupsRelation = $GLOBALS['sys_service_sys_group'];
			$groupsEntity = $GLOBALS['sys_group'];
			$usersGroupsRelation = $GLOBALS['sys_user_sys_group'];
			$menuTemplate = new Skinlet("menu_admin");
			$menu = new Content($servicecategoryEntity, $servicesEntity, $servicesGroupsRelation, $groupsEntity, $usersGroupsRelation);
			$menu->setOrderFields("position");
			$menu->setFilter("username_sys_user", $_SESSION['user']['username']);
			$menu->apply($menuTemplate);
			$head = new Skinlet("frame-private-head");
		}
		
		$skin->setContent("menu", $menuTemplate->get());
		
		$skin->setContent("head", $head->get());
		$header = new Skinlet("header");
		$skin->setContent("header", $header->get());

		/*$sitemap = new Skinlet("sitemap");
		$sitemapContent = new Content($pageEntity, $pageEntity, $pageEntity);
		$sitemapContent->forceMultiple();
		$sitemapContent->apply($sitemap);

		$actual_script=str_replace("/", "", $_SERVER['SCRIPT_NAME']);

		if($actual_script!="page.php")
			$sitemap->setContent('actual_script', $actual_script);
		else
			$sitemap->setContent('actual_script',str_replace("/", "", $_SERVER['REQUEST_URI']) );

		$skin->setContent("sitemap", $sitemap->get());
		*/
		$footer = new Skinlet("footer");
		$skin->setContent("footer", $footer->get());
	}

    public function createSystemGraphic($skin, $login = false)
    {
        $actualUser =  $_SESSION['user']['username'];

        $newsEntity = $GLOBALS['sys_news'];
        $pageEntity = $GLOBALS['sys_page'];
        $servicecategoryEntity = $GLOBALS['sys_servicecategory'];
        $servicesEntity = $GLOBALS['sys_service'];
        $servicesGroupsRelation = $GLOBALS['sys_service_sys_group'];
        $groupsEntity = $GLOBALS['sys_group'];
        $userEntity = $GLOBALS['sys_user'];
        $usersGroupsRelation = $GLOBALS['sys_user_sys_group'];

        /*
         * html head back-end
         */
        $head = new Skinlet("frame-private-head");
        $skin->setContent("head", $head->get());

        /*
         * header back-end
         */

        $header = new Skinlet("header");
        $loggedUser = new Content($userEntity);
        $loggedUser->setFilter('username', $actualUser);
        $loggedUser->forceSingle();
        $loggedUser->apply($header);
        $skin->setContent("header", $header->get());
        /*
         * menu back-end
         */
        $menuTemplate = new Skinlet("menu_admin");
        $menu = new Content($servicecategoryEntity, $servicesEntity, $servicesGroupsRelation, $groupsEntity, $usersGroupsRelation);
        $menu->setOrderFields("position");
        $menu->setFilter("username_sys_user", $actualUser);
        $menu->apply($menuTemplate);
        /*
         * footer back-end
         */
        $footer = new Skinlet("footer");
        $menuTemplate->setContent("footer", $footer->get());
        $skin->setContent("menu", $menuTemplate->get());

        /*$sitemap = new Skinlet("sitemap");
        $sitemapContent = new Content($pageEntity, $pageEntity, $pageEntity);
        $sitemapContent->forceMultiple();
        $sitemapContent->apply($sitemap);

        $actual_script=str_replace("/", "", $_SERVER['SCRIPT_NAME']);

        if($actual_script!="page.php")
            $sitemap->setContent('actual_script', $actual_script);
        else
            $sitemap->setContent('actual_script',str_replace("/", "", $_SERVER['REQUEST_URI']) );

        $skin->setContent("sitemap", $sitemap->get());
        */
    }

}
