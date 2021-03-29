<?php
  session_start();
  include "connexion.php";
?>
<?php
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
        print_r($row);
        $_SESSION['sess_user_id']   = $row['uid'];
        $_SESSION['sess_user_name'] = $row['username'];
        $_SESSION['sess_name'] = $row['name'];

      } else {
        echo "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>
