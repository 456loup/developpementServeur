<?php 
namespace services; 


use PDOException; 


class ConnexionService{

    public static $defautConnexionService;
    public static function getDefaultService(){
    
	    if(connexionservice::$defautConnexionService == null){
		    connexionservice::$defautConnexionService = new ConnexionService(); 
	    }

	    return connexionservice::$defautConnexionService; 
    }

    public static function insererArticle($pdo , $description , $prix , $cheminPhoto , $categorie){
    
        if(isset($description) && isset($prix) && isset($cheminPhoto) && isset($categorie)){
	
	    $sql = "INSERT INTO article(Description , prix , chemin , typeArticle) values(:descri , :prix , :cheminPhoto , :categorie)"; 
	    $searchStmt = $pdo->prepare($sql);
	    $searchStmt->execute([ "descri" => $Description , "prix" => $prix , "cheminPhoto" => $cheminPhoto , "categorie" => $categorie]);
	}	
    }

     
}
