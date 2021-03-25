<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="shotcut icon" href="asset/image/favicon.jfif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/js/app.js"></script>
    <?php
      include "connexion.php";
    ?>
  </head>
  <body>

    <header class="container-fluid bg-secondary">
          <div class="p-2">
            <img src="asset/image/icon.jpg" alt="logo" title="logo" class="logo">
          </div>

    </header>

    <main class="container">

      <div class="auth-form bg-secondary  p-3">
        <form class="" action="index.php" method="post">
          <center><h2>S'authentifier</h2></center>
          <label for="auth-ml" class="form-label">email</label><br>
          <input type="text" name="email" id="auth-ml" class="form-control" required><br>
          <label for="auth-mp" class="form-label">mot de passe</label><br>
          <input type="text" name="pass" id="auth-mp" class="form-control" required><br>
          <div class="form-check">
            <input type="checkbox"class="form-check-input"  id="auth-chx">
            <label for="auth-chx" class="form-check-label" >En vous inscrivant, vous acceptez nos conditions générales d'utilisation et vous acceptez l'utilisation des cookies.</label><br>
          </div>

          <br><center><input type="submit" class="btn btn-primary" value="connexion"></center>
        </form>
      </div>

    </main>
  </body>
</html>
