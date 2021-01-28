<?php

if(!function_exists('connexion_pdo')){  //on vérifie que la function de connexion à la bdd ne soit pas déjà créée
    function connexion_pdo(){
        //variable contenant les informations de connexion à la base de données
        $host       = 'localhost';
        $database   = 'bdd';
        $user       = 'root';
        $password   = '';
        //on fait un try catch pour pouvoir capturer les erreurs et stop le programme les erreurs de connexion
        try{
            $strConnex  = 'mysql:host='.$host.';dbname='.$database.';charset=utf8'; //chaine de connexion à la base de donnée en utf8
            $param	    = array (
				                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,		//rapport d'erreurs sous forme d'exceptions
				                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"	//encodage UTF-8
				                );
            $connex = new PDO($strConnex, $user, $password, $param);         //on instancie une nouvelle connexion à la base de données
            return $connex;
        }catch(Exception $e){
            die("Erreur : ".$e->getMessage());
            return false;
        }
    }
}
$connex = connexion_pdo();
?>