<?php
/**
 * Class InitGraphic
 * Permette la costruzione della struttura della pagina.
 * Type: Singleton
 *
 */

class InitGraphic{

	private static $instance;
	
	private function __construct(){}

    /**
     * @return InitGraphic
     */
    public static function getInstance()
	{
		if(! isset($instance) )
			self::$instance = new InitGraphic();
		return self::$instance;
	}
	
	/**
	 * 
	 * @param Skin $skin
	 * @param boolean $hasNews
     * Costruisce la struttura del front-end.
     * Utilizza:
     * frame-public-head: tag html <head>
     * header e footer: header e footer del tema
     * news: devono essere esplicitamente volute altrimenti non vengono caricate nel tema
     *
	 */
	public function createGraphic($skin, $hasNews = true)
	{
		$newsEntity = $GLOBALS['sys_news'];
		$pageEntity = $GLOBALS['sys_page'];

        $menuEntity = $GLOBALS['sys_menu'];

        $menuTemplate = new Skinlet('menu');
        $menu = new Content($menuEntity,$menuEntity);
        $menu->setFilter("parent_id", 0);
        $menu->setOrderFields("sys_menu_position",'sys_menu_parent',"sys_menu0_position");
        $menu->apply($menuTemplate);

        if($hasNews){
            $newsContent = new Content($newsEntity);
            $newsContent->setLimit(1);
            $newsContent->setOrderFields("id DESC");
            $newsContent->forceSingle();
        }

        /*skinlet frame-public-head: skins/theme/header.html*/
        $head = new Skinlet("frame-public-head");

        /*skinlet header: skins/theme/header.html*/
		$header = new Skinlet("header");
        $header->setContent("offerta", $newsContent->get());

        /*skinlet footer: skins/theme/footer.html*/
        $footer = new Skinlet("footer");

        /*funzionalità breadcrump*/
		/*
            $breadcrump = new Skinlet("sitemap");
            $breadcrumpContent = new Content($pageEntity, $pageEntity, $pageEntity);
            $breadcrumpContent->forceMultiple();
            $breadcrumpContent->apply($breadcrump);

            $actual_script=str_replace("/", "", $_SERVER['SCRIPT_NAME']);

            if($actual_script!="page.php")
                $breadcrump->setContent('actual_script', $actual_script);
            else
                $breadcrump->setContent('actual_script',str_replace("/", "", $_SERVER['REQUEST_URI']) );

            $skin->setContent("sitemap", $breadcrump->get());
		*/

        /*creazione della struttura*/
        $skin->setContent("menu", $menuTemplate->get());
        $skin->setContent("head", $head->get());
        $skin->setContent("header", $header->get());
        $skin->setContent("footer", $footer->get());
	}

    /**
     *
     * @param Skin $skin
     * @param boolean $login
     * Costruisce la struttura del back-end.
     * Utilizza:
     * frame-private-head: tag html <head>
     * header e footer: header e footer del tema
     *
     */
    public function createSystemGraphic($skin, $login = false)
    {
        /*
         * entity necessarie per il funzionamento del back-end
         */
        $actualUser =  $_SESSION['user']['username'];
        $servicecategoryEntity = $GLOBALS['sys_servicecategory'];
        $servicesEntity = $GLOBALS['sys_service'];
        $servicesGroupsRelation = $GLOBALS['sys_service_sys_group'];
        $groupsEntity = $GLOBALS['sys_group'];
        $userEntity = $GLOBALS['sys_user'];
        $usersGroupsRelation = $GLOBALS['sys_user_sys_group'];

        /*
         * skinlet frame-private-head: skins/system/header.html
         */
        $head = new Skinlet("frame-private-head");

        /*
         * skinlet header: skins/system/header.html
         */
        $header = new Skinlet("header");
        $loggedUser = new Content($userEntity);
        $loggedUser->setFilter('username', $actualUser);
        $loggedUser->forceSingle();
        $loggedUser->apply($header);

        /*
         * skinlet menu_admin: skins/system/menu_admin.html
         */
        $menuTemplate = new Skinlet("menu_admin");
        $menu = new Content($servicecategoryEntity, $servicesEntity, $servicesGroupsRelation, $groupsEntity, $usersGroupsRelation);
        $menu->setOrderFields("position");
        $menu->setFilter("username_sys_user", $actualUser);
        $menu->apply($menuTemplate);

        /*
         * skinlet footer: skins/system/footer.html
         */
        $footer = new Skinlet("footer");
        $menuTemplate->setContent("footer", $footer->get());

        /*
         * funzionalità breadcrump
         */
        /*
            $breadcrump = new Skinlet("sitemap");
            $breadcrumpContent = new Content($pageEntity, $pageEntity, $pageEntity);
            $breadcrumpContent->forceMultiple();
            $breadcrumpContent->apply($breadcrump);

            $actual_script=str_replace("/", "", $_SERVER['SCRIPT_NAME']);

            if($actual_script!="page.php")
                $breadcrump->setContent('actual_script', $actual_script);
            else
                $breadcrump->setContent('actual_script',str_replace("/", "", $_SERVER['REQUEST_URI']) );

            $skin->setContent("sitemap", $breadcrump->get());
        */

        /*
         * creazione della struttura
         */
        $skin->setContent("head", $head->get());
        $skin->setContent("header", $header->get());
        $skin->setContent("menu", $menuTemplate->get());

    }

}
