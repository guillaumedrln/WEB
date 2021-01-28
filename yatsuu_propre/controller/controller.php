<?php
//on crée plusieurs fonctions dans le controller que l'on appelera dans le routeur pour savoir quoi faire

function ajouterDonnee(){ //fonction qui permet d'ajouter à la base de données les infos du formulaire
    include(__DIR__."/../model/ajouter.php");
    include(__DIR__."/../model/afficher_tab.php");
    //Ici on sécurise les caractères pouvant être interprétés en HTML (faille XSS)
    $etablissement = htmlspecialchars($_POST['Etablissement']);
    $signification = htmlspecialchars($_POST['Signification']);
    $date_naissance = htmlspecialchars($_POST['date_naissance']);
    $date_mort = htmlspecialchars($_POST['date_mort']);
    
    add($etablissement, $signification, $date_naissance, $date_mort); //on appelle la fonction add du fichier ajouter.php que l'on a include plus haut
    $nbDonnee = nombreDonnee();    //on utilise la fonction du ficher afficher_tab.php que l'on a inlude et qui sert à compter le nombre de ligne dans la table
    $tabDonnee = tableauDonnee();   //ici on récupère les données de la table à l'aide de la fonction du fichier afficher_tab.php
    require(__DIR__."/../view/accueil.php"); //grace à cette ligne on envoie les variable récupéré dans la page accueil.php
}

function accueil(){ //fonction qui affiche la page d'accueil
    include(__DIR__."/../model/afficher_tab.php");
    $nbDonnee = nombreDonnee(); //on utilise la fonction du ficher afficher_tab.php que l'on a inlude et qui sert à compter le nombre de ligne dans la table
    $tabDonnee = tableauDonnee(); //ici on récupère les données de la table à l'aide de la fonction du fichier afficher_tab.php
    require(__DIR__."/../view/accueil.php"); //grace à cette ligne on envoie les variable récupéré dans la page accueil.php
}

/*function erreur($e){  //fonction qui pourra une page dédiée aux erreurs
	$error = $e;
	require(__DIR__."/../view/error.php");
}*/
?>