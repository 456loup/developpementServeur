<?php

namespace controllers;

use services\UserService;
use yasmf\HttpHelper;
use yasmf\View;

class HomeController{

    private $userService;
    public function  __construct(){
	$this->userService = UserService::getDefaultService(); 
    }


    public function  index($pdo){

	$searchStmt = $this->userService->afficherArticleSpecifique($pdo); 
	$view = new View("view/materielVente.php");
        $view->setVar('searchStmt' , $searchStmt); 	
        return $view; 
    }

    
}


?>
