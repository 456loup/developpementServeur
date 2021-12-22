<?php 
namespace services;

use PDOException;

class UserService{

	public static $defautUserService; 
	public static function getDefaultService(){
		
		if(userservice::$defautUserService == null){
			userservice::$defautUserService = new UserService(); 
		}
		return userservice::$defautUserService; 
	}

	public static function afficherTout($pdo){
		$sql = "SELECT * FROM article"; 
		$searchStmt = $pdo->prepare($sql); 
		$searchStmt->execute(); 
		return $searchStmt; 
	}

    public static function afficherArticleSpecifique($pdo){

        $sql = "SELECT * FROM article "; 
        $searchStmt = $pdo->prepare($sql); 
        $searchStmt->execute(); 
        return $searchStmt; 
    
    }


}

?> 
