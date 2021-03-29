<?php

define("SERVEUR","mysql:host=localhost;dbname=projet");
define("USER","root");
define("PASSWORD","");

function skip_accents( $str, $charset='utf-8' ) {

    $str = htmlentities( $str, ENT_NOQUOTES, $charset );

    $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
    $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
    $str = preg_replace( '#&[^;]+;#', '', $str );

    return $str;
}

try{
  $cnx = new PDO(SERVEUR,USER,PASSWORD);

}catch(PDOException $e){
  echo 'erreur'->getMessage();
  die();
}

if(isset($_POST['submit_dep']))
{
  $promo = trim($_POST['promotion_dep']);
  $nom = strtoupper(trim($_POST['nom_dep']));
  $pnom = trim($_POST['pnom_dep']);
  $centre = trim($_POST['centre_dep']);
  $status = trim($_POST['role_dep']);
  $pass = "00000";
  $email = strtolower($pnom).".".strtolower($nom)."@viacesi.fr";
  $query = "INSERT INTO utilisateur(nom, prenom, email,mot_de_passe,status) VALUES(
      :nom,:pnom,:email,:pass,:status
  )";
  $req = $cnx->prepare($query);
  $req->bindParam(":nom",$nom);
  $req->bindParam(":pnom",$pnom);
  $req->bindParam(":email",$email);
  $req->bindParam(":pass",$pass);
  $req->bindParam(":status",$status);
  $req->execute();
  echo $nom." ".$status;
}

?>
