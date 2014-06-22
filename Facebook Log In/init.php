<?php
 /**
  * @author SIV.S
  *
  **/
 
session_start();


spl_autoload_register(function($class){
	require_once("../".$class.".php");
});


Facebook\FacebookSession::setDefaultApplication('600743986705869','e75dd42b7443583d6219fc0cb0a3ca2e');



$facebook = new Facebook\FacebookRedirectLoginHelper("http://localhost/facebook/Facebook%20Log%20In/index.php");

try{

	if($session = $facebook->getSessionFromRedirect()){
		$_SESSION['facebook'] = $session->getToken();
		header("Location:index.php");
	}

	if(isset($_SESSION['facebook'])){
		$session = new Facebook\FacebookSession($_SESSION['facebook']);
		$request = new Facebook\FacebookRequest($session, 'GET', '/me');
		$request = $request->execute();

		
		$user = ($request->getGraphObject()->asArray());

	}

}catch(Facebook\FacebookRequestException $e){
   //Facebook Request Error

}catch(\Exception $e){
  //Local Error	
	
}
