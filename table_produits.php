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
        <h1>Inventaire produits</h1>
        <br><br><br>

        <a href=javascript:history.go(-1)><button id="retour">Retour</button></a>
        <br><br>
        
        <a href="create_produits.php"><button id="valid">Nouveau produit</button></a>

        <br><br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>NUMERO DE PRODUITS</th>
                    <th>NUMERO DE PRODUCTEUR</th>
                    <th>NOM DE PRODUITS</th>
                    <th>PRIX DE PRODUITS</th>
                    <th>STOCK</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Entrer dans la base de données
                include "connexion.php";

                // Affichage de la table

                $reponse = $BDD->query('SELECT NUMPROD, NUMPRO, NOMPROD, PRIXPROD, STOCK FROM produits');
                while ($donnees = $reponse->fetch()){
                ?>
                <tr>
                <td><?php echo $donnees['NUMPROD']?></td>
                <td><?php echo $donnees['NUMPRO']?></td>
                <td><?php echo $donnees['NOMPROD']?></td>
                <td><?php echo $donnees['PRIXPROD']?></td>
                <td><?php echo $donnees['STOCK']?></td>
                <td><a href='table_delete.php?NUMPROD=<?= $donnees["NUMPROD"] ?>'><input type='submit' id='valid' value='supprimer'></a>
                <a href='table_modif.php?NUMPROD=<?= $donnees["NUMPROD"] ?>'><input type='submit' id='valid'value='modifier'></a></td>
                </tr>
                <?php }   ?>
            </tbody>
        </table>
        <br><br><br>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>
</html>