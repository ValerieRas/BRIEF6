<html lang="en">
<?php
$title = "accueil";
include 'form.php';
include 'connexion.php';
include "entete.php";?>

<body>
  <div class="container">
  <div class="nav">
    <?php include 'partials/Navigation.php' ?>
  </div>
  <div class="container-login">

    <div class="form1">
    <table id="inscription">
      <tr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <h2> Inscription</h2>
      <tr>
        <td><label for="prenom" class="form-label">Votre Prenom</label></td>
        <td><input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo  $prenom ?> ">
          <div class="form-text erreur"><?php echo $erreurs['prenomErreur']  ?></div>
        </td>
      </tr>
      <tr>
        <td><label for="nom" class="form-label">Votre Nom</label></td>
        <td><input type="text" name="nom" class="form-control" id="nom" value="<?php echo  $nom ?> ">
          <div class="form-text erreur"><?php echo $erreurs['nomErreur'] ?></div>
        </td>
      </tr>

      <tr>
        <td><label for="motdepass" class="form-label">Votre Mot De Pass</label></td>
        <td><input type="password" name="motdepass" class="form-control" id="motdepass">
          <div class="form-text erreur"><?php echo $erreurs['motdepassErreur'] ?></div>
        </td>

      </tr>
      <tr>
        <td><label for="email" class="form-label">Email</label></td>
        <td><input type="email" name="email" class="form-control" id="email" value="<?php echo  $email ?> ">
          <div class="form-text erreur"><?php echo $erreurs['emailErreur'] ?></div>
        </td>

      </tr>
      <tr>
        <td><button type="submit" class="btn btn-primary" name="envoyer">inscrire</button></td>
      </tr>
      </form>
      </tr>
    </table>
    </div>
    <div class="form2">
    <table id="login">

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <tr>
          <h2> Login</h2>
          <td><label for="email1" class="form-label">Email</label></td>
          <td><input type="email" name="email1" class="form-control" id="email1" required></td>
        </tr>
        <tr>
          <td><label for="motdepass1" class="form-label">Mot De Pass</label></td>
          <td><input type="password" name="motdepass1" class="form-control" id="motdepass1" required></td>
        </tr>
        <tr>
          <td><button type="submit" class="btn btn-primary" name="sub">Login</button></td>
        </tr>
      </form>
    </table>
    </div>
</div></div>
    <script src="script.js"></script>
  
</body>
    <?php
    include 'footer.php';
    ?>
</html>