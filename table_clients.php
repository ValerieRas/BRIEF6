<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php  include "entete.php" ?>
<body>
<div class="container">
        <div class="nav">
            <?php
                include "partials/Navconnect.php";
            ?>
        </div>
        <div class="article">
        <h1>Liste des clients</h1>
        <br><br><br> 
        <a href=javascript:history.go(-1)><button id="retour">Retour</button></a>
        <br><br>
        <?php
        
        // Entrer dans la base de données
        include "connexion.php";

        $reponse=$BDD->query('SELECT MAILPRO FROM PRODUCTEUR');
        if ($reponse==true){
            echo "<a href='Producteur.php'><button>Retour prod</button></a>";
        }
        ?>
        <br><br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>NUMERO DE CLIENT</th>
                    <th>NOM DE CLIENT</th>
                    <th>PRENOM DE CLIENT</th>
                    <th>ADRESSE DE CLIENT</th>
                    <th>ADRESSE MAIL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Affichage de la table

                $reponse = $BDD->query('SELECT NUMCLI, NOMCLI, PRENCLI, ADRCLI, MAILCLI FROM CLIENT');
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['NUMCLI']?></td>
                <td><?php echo $donnees['NOMCLI']?></td>
                <td><?php echo $donnees['PRENCLI']?></td>
                <td><?php echo $donnees['ADRCLI']?></td>
                <td><?php echo $donnees['MAILCLI']?></td>
                <td><a href='table_delete.php?NUMCLI=<?= $donnees["NUMCLI"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='table_modif.php?NUMCLI=<?= $donnees["NUMCLI"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
                </tr>
                <?php }   ?>
            </tbody>
        </table>
        <br><br><br>
        </div>
    </div>
</body>
<?php
include './footer.php';
?>
