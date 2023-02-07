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
        <h1>suppression produits</h1>
            <?php
                include "partials/connexion.php";

                // récupérer le numéro employé

                $NUMPROD=$_GET['NUMPROD'];

                // Suppression d'une ligne

                $nb_supp = $BDD->exec("DELETE FROM produits WHERE NUMPROD='$NUMPROD'");

                // message si requête ok ou pas

                if ($nb_supp){
                echo "$nb_supp <br><br> Produit supprimé !<br><br>";
                }else{
                echo "<br><br>supression impossible<br><br>";
                }
                // impossible d'effacer projet lié à projet et intervenir, 
                // il faut effacer les relations pour pouvoir supprimer.

            ?>
        </div>
    </div>
</body>
<?php
include "partials/footer.php";
?>
</html>