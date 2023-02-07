<?php
session_start();
// connexion a la base de donnees
$bdd = new PDO('mysql:host=localhost; dbname=brief6;charset=utf8', 'root', '');
if(!$bdd){
    echo 'erreur:';
}
// on recupere les variables pour le traitement de la connexion
$prenom= '';
$nom=  '';
$motdepass= '';
$email=     '';
$email1=    '';
$motdepass1= '';

$erreurs=[
    'prenomErreur'=> '',
    'nomErreur'=> '',
    'motdepassErreur'=> '',
    'emailErreur'=> '',
];



if (isset($_POST['envoyer'])){
    $prenom= test_input($_POST['prenom']);
    $nom=  test_input($_POST['nom'] );
    $motdepass=  test_input($_POST['motdepass'] );
    $email=     test_input($_POST['email']);

    if(empty($prenom)){
        $erreurs['prenomErreur']='Entrez Votre Prenom';
    }
   if(empty($nom)){
        $erreurs['nomErreur']='Entrez Votre Nom';
    }
    if(empty($motdepass)){
        $erreurs['motdepassErreur']='Entrez Votre Mot De Passe';
    }
    if(empty($email)){
        $erreurs['emailErreur']='entrez votre email';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erreurs['emailErreur']='entrez CORRECT email';
        
    }
    
    else{

      if($bdd->exec(" INSERT INTO client(NOMCLI,PRENCLI, MAILCLI, MOTDEPASSE) VALUES ('$nom' ,'$prenom','$email','$motdepass' )"))
           {
                echo "La personne a bien été ajoutée ! " .'<br />';
                $prenom= '';
                $nom=  '';
                $motdepass= '';
                $email=     '';
            }
        }
}


//----------------------------connexion d'un utilisateur
// If général pour le login

if (isset($_POST['sub'])){

// on recupère nos variables de connexions

    $email1=     test_input($_POST['email1']);
    $motdepass1=  test_input($_POST['motdepass1'] );




// Connexion pour l'administrateur------------------
    if ( ($email1== "admin@admin.com") &&($motdepass1== "admin")){

         $_SESSION["email1"] = $email1;
         header('Location: admin.php');
    }
              
      
        
// ------------------Connexion pour le client
     
$reponse = $bdd->prepare("SELECT * FROM CLIENT WHERE MAILCLI='$email1' ");
$reponse->execute();
$user = $reponse->fetch();
 if ($_POST['email1'] ==$user['MAILCLI']  && $_POST['motdepass1'] ==$user['MOTDEPASSE'] ){
                echo 'succes' . "<br>" ;
                header('Location: Client.php');
                
}  else if ( ($email1== "admin@admin.com") &&($motdepass1== "admin")){
            header('Location: admin.php');}
else{
     echo 'identifiant client invalide ';
 }

//--------------------------------- Connexion pour le producteur    
    
$reponse = $bdd->prepare("SELECT * FROM producteur WHERE MAILPRO='$email1' ");
$reponse->execute();
$user = $reponse->fetch();

if ($_POST['email1'] ==$user['MAILPRO']  && $_POST['motdepass1'] ==$user['motdepasse'] ){
echo 'producteur connecté avec succes' . "<br>" ;
$_SESSION["email1"] = $emailproducteur;
 header('Location: Producteur.php');         
    }
    





//-----------------------FIN DES OPERATIONS------------------
// Fin du if général
}
    


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>