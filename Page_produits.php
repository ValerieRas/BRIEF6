<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Page_produits</title>
</head>
<body>
    <div class="container">
        <div class="nav">
            <?php
                include "partials/Navigation.php";
            ?>
        </div>
        <div class="article">
        <div class="container_produits">

            <div class="article1">
                <img src="img/mieldemontagne.PNG" alt="miel" class="imgproduit">
                <p class="produittxt">
                    <h2>Miel de Montagne</h2>
                    Ce miel de fleurs de montagne BIO à la texture crémeuse est riche en saveurs.
                    Ses notes florales et fruitées procurent à ce miel un parfum délicat.
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article2">
                <img src="img/boeuf.PNG" alt="boeuf" class="imgproduit">
                <p class=produittxt>
                    <h2>Boeuf</h2>
                    Vous aimez la viande grillée sur barbecue, au feu de cheminée ou sur un brasero pour une préparation quasi instantanée.
                    Laissez-vous séduire par la grande tendreté de nos pièces à griller dans cet assortiment
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article3">
                <img src="img/tomedechevre.PNG" alt="tomedechevre" class="imgproduit">
                <p class=produittxt>
                    <h2>Tomme de chêvre</h2>
                    Cette petite tomme de 700 grammes est une production locale fabriquée à la ferme de Lucie. 
                    C’est un fromage au lait cru entier de chèvre, à pâte pressée non cuite, sous une croûte grise.
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article4">
                <img src="img/vinrouge.PNG" alt="vinrouge" class="imgproduit">
                <p class=produittxt>
                    <h2>Vin rouge</h2>
                    Toute une randonnée en montagne dans une bouteille… La balade vous emmène cueillir des baies, 
                    marcher sur des chemins caillouteux, respirer le grand air, sentir la minéralité et la fraicheur 
                    vous envahir et vous requinquer!

                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article5">
                <img src="img/confiture.PNG" alt="confiture" class="imgproduit">
                <p class=produittxt>
                    <h2>Confiture Maison</h2>
                    L'ensemble de nos recettes sont cuisinées à la vapeur douce (cuisson basse température),
                    sans additif, conservateur, épaississant ou autre supercherie.
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article6">
                <img src="img/veau.PNG" alt="veau" class="imgproduit">
                <p class=produittxt>
                    <h2>Veau</h2>
                    La viande de veau d'une très grande tendreté. Vous trouverez dans ce délicieux colis : des escalopes, 
                    des côtes, des grenadins (tournedos de veau), rôti noix, blanquettes, osso-buco et tendron.
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article7">
                <img src="img/fromageherbe.PNG" alt="fromageherbe" class="imgproduit">
                <p class=produittxt>
                    <h2>Fromage aux herbes</h2>
                    Fromage de chèvre frais, légèrement salé et enrobé d'un mélange d'herbes : 
                    ail, oignon, échalotes, tomates, persil, graines de céleri, poivre, ciboulette, estragon.

                    Fabriqué avec le bon lait des chèvres de la ferme de Lucie.
                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

            <div class="article8">
                <img src="img/vinblanc.PNG" alt="vinblanc" class="imgproduit">
                <p class=produittxt>
                    <h2>Vin blanc</h2>
                    En patois local le nom de ce vin signifie  “la première belle vendange”. 
                    Un vin flatteur, raffiné, très équilibré. Belle complexité due à un terroir exceptionnel 
                    et un assemblage vraiment réussi.

                </p>
                <a href="Page_panier.php">
                <input type="submit" class="ajoutpanier" value="choisir"></a>
            </div>

        </div>
    </div>
</div>   
</body>

<?php
include 'partials/footer.php';
?>
</html>