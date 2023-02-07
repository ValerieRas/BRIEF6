<!DOCTYPE html>
<html lang="en">
<?php  include "partials/entete.php" ?>
<body>
    <div class="container">
        <div class="nav">
            <?php
                include "partials/Navigation.php";
            ?>
        </div>
        <div class="article">
        <h1>Mettre à jour inventaire</h1>

        <form action="#" method=POST>
            <div>
                <label for="NUMPROD">Numéro produits</label>
                <input type="text" id="NUMPROD" name ="NUMPROD" value="" >
            </div>
            <br><br>
            <div>
                <label for="NUMPRO">Numéro producteur</label>
                <input type="text" id="NUMPRO" name="NUMPRO" value="" >
            </div>
            <br><br>
            <div>
                <label for="NOMPROD">Nom de produit</label>
                <input type="text" id="NOMPROD" name="NOMPROD" value="" >
            </div>
            <br><br>
            <div>
                <label for="PRIXPROD">Prix de produit</label>
                <input type="text" id="PRIXPROD" name="PRIXPROD" value="" >
            </div>
            <br><br>
            <div>
                <label for="STOCK">STOCK</label>
                <input type="text" id="STOCK" name="STOCK" value="" >
            </div>
            <br>
            <div>
            <input type="submit" id="valid" value="Valider">
            </div>
    </form>
        </div>
    </div>
    <?php
    
    include "partials/connexion.php";

    // les nouvelles données de la table

    if (!empty($_POST)){

        $NUMPROD=$_POST['NUMPROD'];
        $NUMPRO=$_POST['NUMPRO'];
        $NOMPROD=$_POST['NOMPROD'];
        $PRIXPROD=$_POST['PRIXPROD'];
        $STOCK=$_POST['STOCK'];
        
        
    
        $query = $BDD->exec("INSERT INTO produits(NUMPROD,NUMPRO,NOMPROD,PRIXPROD,STOCK) VALUES ($NUMPROD, $NUMPRO, '$NOMPROD', $PRIXPROD, $STOCK)");
        
        if ($query){
    
            echo " <br><br>Un nouveau produit a été ajouté";
    
        }else{
    
            echo "<br><br>Ajout impossible";
        }
        }
    ?>