<!DOCTYPE html>
<html lang="en">
<?php  include "partials/entete.php" ?>
<body>
    <div class="container">
        <div class="nav">
            <?php
                include "partials/Navconnect.php";
            ?>
        </div>
        <div class="article">
        <h1>Liste des producteurs</h1>
        <br><br><br> 
        <a href=javascript:history.go(-1)><button id="retour">Retour</button></a>
        <!-- <a href="create_produits.php"><button id="valid">Nouveau producteur</button></a> -->

        <br><br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>NUMERO DE PRODUITS</th>
                    <th>NUMERO DE PRODUCTEUR</th>
                    <th>NOM DE PRODUITS</th>
                    <th>ADRESSE</th>
                    <th>ADRESSE MAIL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Entrer dans la base de données
                include "partials/connexion.php";

                // Affichage de la table

                $reponse = $BDD->query('SELECT NUMPRO, NOMPRO, OCCUPRO, ADRPRO, MAILPRO FROM PRODUCTEUR');
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['NUMPRO']?></td>
                <td><?php echo $donnees['NOMPRO']?></td>
                <td><?php echo $donnees['OCCUPRO']?></td>
                <td><?php echo $donnees['ADRPRO']?></td>
                <td><?php echo $donnees['MAILPRO']?></td>
                <td><a href='table_delete.php?NUMPRO=<?= $donnees["NUMPRO"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='table_modif.php?NUMPRO=<?= $donnees["NUMPRO"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
                </tr>
                <?php }   ?>
            </tbody>
        </table>
        <br><br><br>
        </div>
    </div>
</body>
<?php
include 'partials/footer.php';
?>

</html>