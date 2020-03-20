<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Centre d'Aéromodélisme de Pepinster ASBL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../images/accueil/logo.jpg" rel="icon" type="image/x-icon" />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <?php
      require('../db/db.php');
      if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']); // enlever backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
    
        $trn_date = date("Y-m-d H:i:s");
            $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<div class='form'><h3>Vous êtes enregistré avec succès.</h3><br/>Cliquez ici pour vous connecter <a href='connexion.php'>Se connecter</a></div>";
            }
        }else{
    ?>
    <?php include("navbar.php"); ?>
  
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../images/accueil/site_CAP.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            
            <div class="row justify-content-center">
          <form id="login-form" class="form" action="" method="post" name="registration">
          <h1 class="mb-3 bread">Inscription</h1>
            <div class="form-group">
              <label for="username" class="text-info">Nom d'utilisateur:</label><br>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="username" class="text-info">E-mail:</label><br>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password" class="text-info">Mot de passe:</label><br>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-info btn-md" value="S'inscrire">
            </div>
            <div id="register-link" class="text-right">
              <a href="connexion" class="text-info">Se connecter</a>
            </div>
         </form>
    </div>
          </div>
        </div>
      </div>
    </section>

  <?php } ?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
  <?php include("footer.php"); ?>
</html>