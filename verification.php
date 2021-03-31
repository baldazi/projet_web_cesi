<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'projet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
       $requete = "SELECT * FROM utilisateur where email = '".$username."' and mot_de_passe = '".$password."' ";
       $exec_requete = mysqli_query($db,$requete);
       $reponse      = mysqli_fetch_array($exec_requete);
       $statut = $reponse['statut'];
       // etudiant
       if($username!="" && $password!="" && $statut!="admin" && $statut!="pilote" && $statut!="delegue" ) // nom d'utilisateur et mot de passe correctes
       {
          $_SESSION['username'] = $username;
          header('Location: etudiant.html');
       }
       //admin
       elseif( $username!="" && $password!="" && $statut!="pilote" && $statut!="delegue" ) // nom d'utilisateur et mot de passe correctes
       {
         header('Location: admin.html');
       }
       //pilote
       elseif( $username!="" && $password!="" && $statut!="delegue" ) // nom d'utilisateur et mot de passe correctes
       {
         header('Location: pilote.html');
       }
       //delegue
       elseif( $username!="" && $password!="" ) // nom d'utilisateur et mot de passe correctes
       {
         header('Location: delegue.html');
       }
       else
       {
          header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
       }
   }
   else
   {
      header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
   }
}
else
{
  header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>