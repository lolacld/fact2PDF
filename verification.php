<?php

include('model/database.php');

// VERIFICATIONS POUR LA CONNEXION
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'fac2pdf';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));
    

    // Demande à la base de vérifier si un utilisateur correspond
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
         nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        
        if($count != 0) // si nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           $_SESSION['password'] = $password;

           // redirection vers la page d'accueil 
           header('Location: index.php');
        } else {
           header('Location: login.php?erreur=1'); // erreur
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }


// VERIFICATION POUR L'INSCRIPTION
// $db_username = 'root';
// $db_password = '';
// $db_name     = 'fac2pdf';
// $db_host     = 'localhost';
// $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
//        or die('could not connect to database');

if(isset($_POST['forminscription'])) {

   // on utilise la fonction htmlscpecialchars pour eviter toutes injections XSS et SQL

   $name = htmlspecialchars($_POST['name']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']); // mot de passe hash
   $mdp2 = sha1($_POST['mdp2']);


   if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $namelength = strlen($name);

      if($namelength <= 255) 
      {
         if($mail == $mail2) // si les 2 mdps correspondent 
         {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) 
            {
               $reqmail = $db->prepare("SELECT * FROM utilisateur WHERE mail = $mail");
               $result = mysqli_query($db, $query);
               
               if($result == 0) // s'il n'existe pas de mail en base
               {
                  if($mdp == $mdp2) 
                  {
                     $insertmbr = $db->prepare("INSERT INTO utilisateur(user_name, mdp, mdp2, is_admin, mail, mail2) VALUES($username, $mdp, $mdp2, ?, $mail, $mail2)");
                     $result = mysqli_query($db, $query);
                        if($result) 
                        {
                           $erreur = "Votre compte a bien été créé ! <a href=\"login.php\">Me connecter</a>";
                        }
                  } else {
                     // Sinon erreurs ... 
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
mysqli_close($db); // fermer la connexion
}
}
?>