<!doctype html>
<html lang="en">

  <head>

  
    <title>Cargo &mdash; Website Template by Colorlib</title>
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="./css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include 'bande.php'; session_start();?>
    <?php include 'navbar.php';?>
    <?php include 'cover.php';?>
   <?php print_r($_SESSION); ?>
    <div class="site-section" id="connexion-section">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                  <h2>Connectez-vous</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="100">
                <form action="" method="post" id="contactForm" name="login">
                  <div class="form-group row">
                    <div class="col-md-6 mb-4 mb-lg-0">
                      <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
                      
                    </div>
                    <div class="col-md-6">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                  </div>
    
                  <div class="form-group row">
                    <div class="col-md-12 mr-auto">
                      <input type="submit" id="form-submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Connexion">
                    </div>
                  </div>
                </form>
              </div>
              <?php include 'connexion.php';?>
            </div>
          </div>
        </div>

      <?php include 'footer.php';?>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/jquery.sticky.js"></script>
    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/jquery.animateNumber.min.js"></script>
    <script src="./js/jquery.fancybox.min.js"></script>
    <script src="./js/jquery.easing.1.3.js"></script>
    <script src="./js/aos.js"></script>

    <script src="./js/main.js"></script>


  </body>

</html>
