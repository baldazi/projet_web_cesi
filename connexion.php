<?php
  define("USER","root");
  define("CONNEXION","mysql:host=localhost;dbname=projet");
  define("PASS","");
  try{
    $cnx = new PDO(CONNEXION,USER,PASS);
    echo "connecter";
  }catch(PDOException $e){
    echo 'erreur'.$e->getMessage();
    die();
  }

 ?>
