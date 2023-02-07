<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page_produits</title>
</head>
<body>
    <div class="container">
        <div class="nav">
            <?php
                include "partials/Navconnect.php";
            ?>
        </div>
        <div class="article">
        <h1>MODIFICATION PRODUITS </h1>
        <?php   
            // Entrer dans la base de données
            include "partials/connexion.php";
        
            $NUMPROD= $_GET['NUMPROD'];
            $reponse = $BDD->query("SELECT * FROM produits WHERE NUMPROD=$NUMPROD");
            $donnees = $reponse->fetch(); 

        ?>
    <br><br>
    <form action="#" method=POST>
    <div>
        <label for="NUMPROD">Numéro produits</label>
        <input type="text" id="NUMPROD" name ="NUMPROD" value="<?=$NUMPROD?>" >
    </div>
    <br><br>
    <div>
        <label for="NUMPRO">Numéro producteur</label>
        <input type="text" id="NUMPRO" name="NUMPRO" value="<?=$donnees['NUMPRO'];?>" >
    </div>
    <br><br>
    <div>
        <label for="NOMPROD">Nom de produit</label>
        <input type="text" id="NOMPROD" name="NOMPROD" value="<?=$donnees['NOMPROD'];?>" >
    </div>
    <br><br>
    <div>
        <label for="PRIXPROD">Prix de produit</label>
        <input type="text" id="PRIXPROD" name="PRIXPROD" value="<?=$donnees['PRIXPROD'];?>" >
    </div>
    <br><br>
    <div>
        <label for="STOCK">Stock de produit</label>
        <input type="text" id="STOCK" name="STOCK" value="<?=$donnees['STOCK'];?>" >
    </div>
    <br>
    <div>
    <input type="submit" id="valid" value="Valider">
    </div>
    </form>
    <br><br>

    <?php
    

    // les nouvelles données de la table

    if (!empty($_POST)){

    $NUMPRO=$_POST['NUMPRO'];
    $NOMPROD=$_POST['NOMPROD'];
    $PRIXPROD=$_POST['PRIXPROD'];
    $STOCK=$_POST['STOCK'];
    
    $NUMPROD=$_GET['NUMPROD'];

    $query = $BDD->exec("UPDATE produits SET NUMPRO='$NUMPRO', NOMPROD='$NOMPROD', PRIXPROD='$PRIXPROD', STOCK='$STOCK' 
            WHERE NUMPROD='$NUMPROD'");
    
    if ($query){

        echo " <br><br>Les modifications sont enregistrées pour le produit n°".$NUMPROD;

    }else{

        echo "<br><br>Modifications impossibles";
    }
    }
    ?>
        </div>
    </div>
</body>
<?php
include "partials/footer.php";
?>
</html>