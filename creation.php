<?php

define("SERVEUR","mysql:host=localhost;dbname=projet;charset=utf8");
define("USER","root");
define("PASSWORD","");

try{
  $cnx = new PDO(SERVEUR,USER,PASSWORD);

}catch(PDOException $e){
  echo 'erreur'->getMessage();
  die();
}
/**********************************CREER del, etud, pil******************/
if(isset($_POST['submit_dep']))
{
  $promo = trim($_POST['promotion_dep']);
  $nom = strtoupper(trim($_POST['nom_dep']));
  $pnom = trim($_POST['pnom_dep']);
  $centre = trim($_POST['centre_dep']);
  $status = trim($_POST['role_dep']);
  $pass = "00000";
  $email = strtolower($pnom).".".strtolower($nom)."@viacesi.fr";
  $query = "INSERT INTO utilisateur(id_promotion,id_centre,nom, prenom, email,mot_de_passe,status) VALUES(
      :id_promo,:id_centre,:nom,:pnom,:email,:pass,:status
  )";
  $req = $cnx->prepare($query);
  $req->bindParam(":nom",$nom);
  $req->bindParam(":pnom",$pnom);
  $req->bindParam(":email",$email);
  $req->bindParam(":pass",$pass);
  $req->bindParam(":status",$status);
  $req->bindParam(":id_promo",$promo);
  $req->bindParam(":id_centre",$centre);
  $req->execute();
  echo $nom." ".$status." ".$centre." ".$email;
}

/***********************************CREER Entreprise**************************/
if(isset($_POST['submit_creer_ent'])){
  $nom = trim($_POST['nom_cre_entr']);
  $secteur = trim($_POST['sect_cre_ent']);
  $local = trim($_POST['loc_cre_ent']);
  $nb_stag = trim($_POST['nbr_st_acc']);
  $confpil = trim($_POST['conf_pilo_cree']);
  $query = "INSERT INTO `entreprise` (`nom`, `secteur_d_activite`, `localite`, `competances_recherche`, `nombre_de_stagiaire`, `eval_des_stagiaires`, `confience_du_pilote`, `eval_selon_crit`)
  VALUES (:nom, :sec, :loc, '0', :stag, '0', :conf, '5')";
  $req = $cnx->prepare($query);
  $req->bindParam(":nom",$nom);
  $req->bindParam(":sec",$secteur);
  $req->bindParam(":loc",$local);
  $req->bindParam(":stag",$nb_stag);
  $req->bindParam(":conf",$confpil);
  $req->execute();
  echo $nom."<br>".$secteur."<br>".$local."<br>".$confpil;
}

/***********************************CREER stage**************************/
if(isset($_POST['submit_creer_stage'])){
  $comp = trim($_POST['comp']);
  $local = trim($_POST['local']);
  $entr = trim($_POST['entr']);
  $promo = trim($_POST['promo']);
  $dure = trim($_POST['dure']);
  $base = trim($_POST['base']);
  $date = trim($_POST['date']);
  $place = trim($_POST['place']);
  $query = "INSERT INTO `offre_de_stage` (`competences`, `types_de_promotions_concernees`, `base_de_remuneration`, `date_offre`, `nombre_de_places`, `duree`, `localite`, `entreprise`)
   VALUES (:comp, :promo, :base, :dat, :place,:dure,:local,:entr)";
  $req = $cnx->prepare($query);
  $req->bindParam(":comp",$comp);
  $req->bindParam(":local",$local);
  $req->bindParam(":entr",$entr);
  $req->bindParam(":promo",$promo);
  $req->bindParam(":dure",$dure);
  $req->bindParam(":base",$base);
  $req->bindParam(":dat",$date);
  $req->bindParam(":place",$place);
  $req->execute();
}

?>
