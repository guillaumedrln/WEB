<?php
 

function add($etablissement, $signification, $date_naissance, $date_mort){  //fonction qui permet d'ajouter à la bdd les données
    require(__DIR__."/connexion.php");
    $sql = "INSERT INTO etablissement (Etablissement, Signification, Date_naissance, Date_mort) VALUES (?,?,?,?)";  //ici on stock notre requête préparée dans une variable
                                                                                                                    //les requêtes préparé permettent de prévenir des attaques d'injections sql dans les formulaires    
    $request = $connex->prepare($sql);  //on prépare la bdd à recevoir la requête
    $request->execute(array($etablissement, $signification, $date_naissance, $date_mort)); //on exécute en donnant les informations qui seront rentrées sans être interprétée par le sql
    $request->closeCursor();    //ferme la requête permettant d'utiliser d'autre requêtes si besoin lors de la même action (ici je le mets toujours par réflexe)
    $connex = null; //on ferme la connexion à la bdd pour ne pas la surchargée de connexion
}

?>