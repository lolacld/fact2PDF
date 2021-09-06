<?php
// VERIFICATIONS POUR LA CONNEXION
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'lesdevs';
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

    mysqli_close($db); // fermer la connexion
}

// VERIFICATION POUR L'INSCRIPTION

if(isset($_POST['forminscription'])) {

   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);

   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);

      if($pseudolength <= 255) 
      {
         if($mail == $mail2) 
         {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) 
            {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               
               if($mailexist == 0) 
               {
                  if($mdp == $mdp2) 
                  {
                     $insertmbr = $bdd->prepare("INSERT INTO utilisateur(user_name, nom, prenom, MDP, ) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
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
}
?>



?>