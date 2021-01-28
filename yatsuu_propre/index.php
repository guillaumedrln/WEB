<?php
//ici on est dans un "routeur" il permet de faire le lien entre tout les controller

    require(__DIR__."/controller/controller.php");

    if(isset($_POST['envoyer'])){ //on rergarde si on a appuyé sur le bouton d'envoie du formulaire
		if(isset($_POST['Etablissement']) && isset($_POST['Signification']) && isset($_POST['date_naissance']) && isset($_POST['date_mort'])){			  //si tous les champs sont remplis
			ajouterDonnee(); //fonction du controller qui permet d'ajouter les données à la bdd
		}else{
			//erreur("Donnée manquantes");
		}
    }else{
        accueil(); //fonction du controller qui affiche la page d'accueil de base quand on ne fait aucune action
    }
?>