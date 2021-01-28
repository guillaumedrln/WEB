<?php

function nombreDonnee(){
    require(__DIR__."/connexion.php");
    $sql = "SELECT * FROM etablissement ORDER BY id"; //on stock la requête sql dans une variable
    $request = $connex->prepare($sql); //on prépare la bdd à recevoir la requête
    $request->execute(); //on exécute la requête
    /*
        A la différence de la fonction add, ici on ne demande pas à l'utilisateur de rentrer des données pour en injecter ou autres
        donc il n'y a pas de variable à rentrer dans le execute() (contrairement à dans ajouter.php) 
        mais je fais quand même une requête préparée pour avoir le réflexe de le faire on sait jamais
    */
    $NbData = $request->rowCount(); //on stock le nombre de ligne du résultat obtenu dans une variable
    $request->closeCursor(); //ferme la requête permettant d'utiliser d'autre requêtes si besoin lors de la même action (ici je le mets toujours par réflexe)
    $connex = null; //on ferme la connexion à la bdd pour ne pas la surchargée de connexion
    return $NbData; //on retourne le nombre de ligne
}

function tableauDonnee(){
    require(__DIR__."/connexion.php");
    $sql = "SELECT * FROM etablissement ORDER BY id"; //on stock la requête sql dans une variable
    $request = $connex->prepare($sql); //on prépare la bdd à recevoir la requête
    $request->execute(); //on exécute la requête
    /*
        A la différence de la fonction add, ici on ne demande pas à l'utilisateur de rentrer des données pour en injecter ou autres
        donc il n'y a pas de variable à rentrer dans le execute() (contrairement à dans ajouter.php) 
        mais je fais quand même une requête préparée pour avoir le réflexe de le faire on sait jamais
    */
    $rowAll = $request->fetchAll(); //on stock les données du résultat obtenu dans une variable
    $request->closeCursor(); //ferme la requête permettant d'utiliser d'autre requêtes si besoin lors de la même action (ici je le mets toujours par réflexe)
    $connex = null; //on ferme la connexion à la bdd pour ne pas la surchargée de connexion
    return $rowAll; //on retourne un tableau de données récupérées
}
?>