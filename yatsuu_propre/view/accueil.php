<!DOCTYPE html>
<html lang="fr">
    <head> 
           <meta charset="utf-8" />
           <link rel="stylesheet" href="css/style.css">
           <title> Etablissement scolaire </title>   
    </head>
    <body>
        <form method="post" action="index.php">
            <label>Etablissement</label> 
            <input type="text" name="Etablissement"/>

            <label>Signification</label> 
            <input type="textarea" name="Signification"/>

            <label>Date de naissance</label> 
            <input type="date" name="date_naissance"/>

            <label> Date de décès</label> 
            <input type="date" name="date_mort"/>

            <input type="submit" name ="envoyer" value="Envoyer"/>
        </form>  
    <br>
        <?php
        
        if($nbDonnee != 0){   // Permet de vérifier si il y a des données dans la bdd

            //creation du tableau html en php
            echo    "<table border='1'>";
            echo    "<thead>";
            echo        "<tr>";
            echo		    "<th>id</th>";
            echo		    "<th>Etablissements</th>";
            echo		    "<th>Signification</th>";
            echo		    "<th>Date naissance</th>";
            echo		    "<th>Date décès</th>";
            echo	    "</tr>";
            echo    "</thead>";

            echo    "<tbody>";
            foreach ($tabDonnee as $donnee){
                echo "<tr>";
                echo "<td>".$donnee['id']."</td>";
                echo "<td>".$donnee['Etablissement']."</td>";
                echo "<td>".$donnee['Signification']."</td>";
                echo "<td>".$donnee['Date_naissance']."</td>";
                echo "<td>".$donnee['Date_mort']."</td>";
                echo "</tr>";
            }

            echo    "</tbody>";
            echo    "</table>";
        }else{
            echo "Pas de données à afficher";
        }
        ?>
    </body>
</html>
