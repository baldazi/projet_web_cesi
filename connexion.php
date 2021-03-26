<?php
  define("USER","root");
  define("CONNEXION","mysql:host=localhost;dbname=projet");
  define("PASS","");
  try{
    $cnx = new PDO(CONNEXION,USER,PASS);
  }catch(PDOException $e){
    echo 'erreur'.$e->getMessage();
    die();
  }

 ?>

<?php
$msg = "";
if(isset($_POST['sub'])) {
  $username = trim($_POST['email']);
  $password = trim($_POST['pass']);
  if($username != "" && $password != "") {
    try {
      $query = "select * from utilisateurs where username=:username and password=:password";
      $stmt = $cnx->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['uid'];
        $_SESSION['sess_user_name'] = $row['username'];
        $_SESSION['sess_name'] = $row['name'];

      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>
