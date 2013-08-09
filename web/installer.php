<?php

//require_once realpath(dirname(__FILE__))."/include/settings.inc.php";
//require_once realpath(dirname(__FILE__))."/include/skin.inc.php";
//require_once realpath(dirname(__FILE__))."/include/skinlet.inc.php";
require_once realpath(dirname(__FILE__))."/include/beContent.inc.php";

require_once realpath(dirname(__FILE__))."/contents/installer/installerContext.php";




// if(file_exists(realpath(dirname(__FILE__)).'/contents/config.cfg'))
// {
// 	Header("Location: index.php");
// }
// else
// {
// 	if(isset($_REQUEST["usernameMysql"]) && isset($_REQUEST["host"]) && isset($_REQUEST["database"])
// 			&&isset($_REQUEST["usernameAdmin"])
// 			&&isset($_REQUEST["passwordAdmin"])
// 			&&isset($_REQUEST["emailAdmin"])
// 			&&isset($_REQUEST["nameAdmin"])
// 			&&isset($_REQUEST["surnameAdmin"]))
// 	{
// 		$username=$_REQUEST["usernameMysql"];
// 		$password=$_REQUEST["passwordMysql"];
// 		$host=$_REQUEST["host"];
// 		$database=$_REQUEST["database"];
// 		$usernameAdmin=$_REQUEST["usernameAdmin"];
// 		$passwordAdmin=$_REQUEST["passwordAdmin"];
// 		$emailAdmin=$_REQUEST["emailAdmin"];
// 		$nameAdmin=$_REQUEST["nameAdmin"];
// 		$surnameAdmin=$_REQUEST["surnameAdmin"];
// 		if(DB::testConnection($host, $database, $username, $password))
// 		{
// 			$request_config=array();
// 			$database_config = array ('username'=>$username,'password'=>$password,'host'=>$host,'database'=>$database);
			
// 			$request_config["database_config"]=$database_config;
			
// 			$admin_config=array ('username'=>$usernameAdmin,'password'=>$passwordAdmin,'email'=>$emailAdmin,'name'=>$nameAdmin,'surname'=>$surnameAdmin);
			
// 			$request_config["admin_config"]=$admin_config;
			
// 			file_put_contents(realpath(dirname(__FILE__)).'/contents/config.cfg',json_encode($request_config,JSON_PRETTY_PRINT));
// 			Header("Location: install_complete.php");
// 		}
// 		else
// 		{
// 			Header("Location: error.php");
// 		}
// 	}
	
// 	$main = new Skin("installer");
	
// 	$head = new Skinlet("frame-public-head");
	
// 	$main->setContent("head", $head->get());
// 	$header = new Skinlet("header");
// 	$main->setContent("header", $header->get());
	
// 	$body = new Skinlet("installer");
// 	$main->setContent("body", $body->get());
	
// 	$footer = new Skinlet("footer");
// 	$main->setContent("footer", $footer->get());
// 	$main->close();
// }
?>
